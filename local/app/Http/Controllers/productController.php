<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use \Milon\Barcode\DNS1D;

class productController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function login()
    {return view('login');}
    public function index()
    {return view('index');}
    public function home()
    {return view('welcome');}
    public function profile()
    {return view('profile');}
    public function dashboard()
    {return view('index');}
    public function register()
    {return view('register');}
 
    public function reportdaily()
    {
        $product_daily = DB::table('product_log')
            ->join('product_status', 'product_log.product_status_id', '=', 'product_status.product_status_id')
            ->join('product', 'product.uid', '=', 'product_log.product_uid')
            ->get();
            $product_stat = DB::table('product_status')
            ->get();
        return view('reportdaily',
            array(
                'productDailyList' => $product_daily,
                'productstat' => $product_stat,
            ));
    }

    public function reportstaff()
    {
        $product_daily = DB::table('product_log')
            ->join('product_status', 'product_log.product_status_id', '=', 'product_status.product_status_id')
            ->join('product', 'product.uid', '=', 'product_log.product_uid')
            ->get();
        return view('reportstaff',
            array(
                'productDailyList' => $product_daily,
                
            ));
    }

    public function reportproduct()
    {
        $product_daily = DB::table('product_log')
            ->join('product_status', 'product_log.product_status_id', '=', 'product_status.product_status_id')
            ->join('product', 'product.uid', '=', 'product_log.product_uid')
            ->get();
        $product_stat = DB::table('product_status')
            ->get();
        $product_class = DB::table('product_class')
            ->get();
        return view('reportproduct',
            array(
                'productDailyList' => $product_daily,
                'productstat' => $product_stat,
                'productclass' => $product_class,
            ));
    }

    // product search //*************************************************************************** */
    public function productsearch(Request $request)
    {
        $status = $request->input('statuspro');
       
        
        $product_daily = DB::table('product_log')
                    ->join('product_status', 'product_log.product_status_id', '=', 'product_status.product_status_id')
                    ->join('product', 'product.uid', '=', 'product_log.product_uid')
                    ->where('product_log_by', 'like', '%' . $status . '%')
                    ->get();
                    return view('reportstaff',
            array(
                'productDailyList' => $product_daily,
                
            ));
            //     // chang Y/m/d = Y-m-d 
            //     $start = str_replace("/","-",$request->input("datestart"));
            //     $end = str_replace("/","-",$request->input("dateend"));
          
            //     $datestart = date("Y-m-d",strtotime($start));
            //     $dateend = date("Y-m-d",strtotime($end));
            //     // dd($datestart,$dateend);
            //     // join table //
            //     $datas = DB::table('product_log')
            //     //->join('ref_selling_product','selling2.selling_id','=','ref_selling_product.refproduct_selling')
            //     //->join('product','ref_selling_product.refproduct_product','=','product.product_id')
               
            // ->join('product_status', 'product_log.product_status_id', '=', 'product_status.product_status_id')
            // ->join('product', 'product.uid', '=', 'product_log.product_uid')       
            //             if(!empty($request->input('statuspro'))) {
            //                 $datas->where('product_log.product_status_id',$request->input('statuspro'));
            //             }
            //     $data = $datas->where(function($query) use ($datestart,$dateend){
            //             $query->where('product_log.product_log_date','>=',$datestart);
            //             $query->where('product_log.product_log_date','<=',$dateend);
            //     })->get(); 
               
            //     $all_data = array();
            //     $all_data['data'] = $data;
            //     $all_data['status'] = $request->get('statuspro');
    }

    public function productfind(Request $request){

        $status = $request->input('statuspro');
        $classn = $request->input('classno');
        $start = $request->input('start');
        $end = $request->input('end');
        
        $product_daily = DB::table('product_log')
                    ->join('product_status', 'product_log.product_status_id', '=', 'product_status.product_status_id')
                    ->join('product', 'product.uid', '=', 'product_log.product_uid')
                    ->whereBetween(\DB::raw('substr(product_log_date, 1, 10)'), [$start, $end])
                    ->Where('product_log.product_status_id', '=', $status )
                    ->Where('product.product_class_no', '=', $classn )
                    ->get();
                    $product_stat = DB::table('product_status')
                    ->get();
                    $product_class = DB::table('product_class')
                    ->get();
                    return view('reportproduct',
            array(
                'productDailyList' => $product_daily,
                'productstat' => $product_stat,
                'productclass' => $product_class,
                
            ));

    }

    public function datatable_productfind(Request $request){

            

        $product_out = DB::table('product_log')
        ->join('product_status', 'product_log.product_status_id', '=', 'product_status.product_status_id')
        ->join('product', 'product.uid', '=', 'product_log.product_uid');

 
        if($key_star = $request->input('datestart') && $key_end = $request->input('dateend') ){	
            $product_out->WhereBetween(\DB::raw('substr(product_log.product_log_date, 1, 10)'), [$request->input('datestart'), $request->input('dateend')]);			
        }	
        if($key_inout = $request->input('statuspro')){			
            $product_out->Where('product_log.product_status_id', '=', $key_inout);			
        }
        if($classn = $request->input('classno')){			
            $product_out->Where('product.product_class_no', '=', $classn);		
        }
        // if($key_end = request('dateend')){			
        //     $product_out->Where(\DB::raw('substr(product_log.product_log_date, 1, 10)'),$key_end);			
        // }		      
        $dataproduct = $product_out->get();
        $sQuery	= Datatables::of($dataproduct);
        return $sQuery->escapeColumns([])->make(true);    

}


    public function productfindday(Request $request){

        $status = $request->input('statuspro');
        $start = $request->input('datestart');
        $end = $request->input('dateend');
        
        $product_daily = DB::table('product_log')
                    ->join('product_status', 'product_log.product_status_id', '=', 'product_status.product_status_id')
                    ->join('product', 'product.uid', '=', 'product_log.product_uid')
                    ->whereBetween(\DB::raw('substr(product_log_date, 1, 10)'), [$start, $end])
                    ->Where('product_log.product_status_id', '=', $status )
                    ->get();
                    $product_stat = DB::table('product_status')
                    ->get();

                    $data['member']   = $product_daily;
        
                    echo json_encode($data);  

    }

    public function datatable_product(Request $request){
        //findday
            

            $product_out = DB::table('product_log')
            ->join('product_status', 'product_log.product_status_id', '=', 'product_status.product_status_id')
            ->join('product', 'product.uid', '=', 'product_log.product_uid');
   
     
            if($key_star = $request->input('datestart') && $key_end = $request->input('dateend') ){	
                $product_out->WhereBetween(\DB::raw('substr(product_log.product_log_date, 1, 10)'), [$request->input('datestart'), $request->input('dateend')]);			
            }	
            if($key_inout = $request->input('statuspro')){			
                $product_out->Where('product_log.product_status_id', '=', $key_inout);			
            }
            // if($key_star = request('datestart')){			
            //     $product_out->Where(\DB::raw('substr(product_log.product_log_date, 1, 10)'),$key_star);			
            // }
            // if($key_end = request('dateend')){			
            //     $product_out->Where(\DB::raw('substr(product_log.product_log_date, 1, 10)'),$key_end);			
            // }		      
            $dataproduct = $product_out->get();
            $sQuery	= Datatables::of($dataproduct);
            return $sQuery->escapeColumns([])->make(true);    

    }
    ////*********************************************************************************************************//
    public function productrunout()
    { 
        $product_out = DB::table('product_log')
            ->join('product_status', 'product_log.product_status_id', '=', 'product_status.product_status_id')
            ->join('product', 'product.uid', '=', 'product_log.product_uid')
            ->whereDate('product_log_exp','<',DB::raw('CURDATE()'))
            ->get();

           
        return view('productrunout',
            array(
                'productOutList' => $product_out,
                
            ));
    }

    public function productlog()
    { 
        $product_out = DB::table('product_log')
            ->join('product_status', 'product_log.product_status_id', '=', 'product_status.product_status_id')
            ->join('product', 'product.uid', '=', 'product_log.product_uid')
            ->get();

           
        return view('productlog',
            array(
                'productOutList' => $product_out,
                
            ));
    }

    public function productlot()
    {
        $product_lot = DB::table('lot')->get();
        return view('productlot',
            array(
                'product_lot' => $product_lot,
                
            ));
    }

    public function productedit($id)
    {
        $product_list = DB::table('product')->where('uid', $id)
            ->join('product_type', 'product.product_group', '=', 'product_type.uid_product_type')
            ->join('product_class', 'product.product_class_no', '=', 'product_class.class_uid')
            ->first();
        $product_type = DB::table('product_type')->get();
        $product_class = DB::table('product_class')->get();
        //  dd($product_code);
        return view('productedit',
            array(
                'productlist' => $product_list,
                'product_type' => $product_type,
                'productclass' => $product_class,
            ));

    }

    public function productlist()
    {
        $product_code = DB::table('product')
            ->join('product_type', 'product.product_group', '=', 'product_type.uid_product_type')
            ->join('product_class', 'product.product_class_no', '=', 'product_class.class_uid')
            ->get();

            // $product_code=DB::select("SELECT * , IF(R1.product_amount<R1.product_min, 'fb6868', '')) AS ifmin
            // FROM product AS R1
            // JOIN product_status AS R2 ON R1.product_group = R2.product_status_id
            // JOIN product_class AS R3 ON R1.product_class_no = R3.class_uid");
            
        $product_type = DB::table('product_type')->get();
        $product_class = DB::table('product_class')
            ->get();
        return view('productlist',
            array(
                'productlist' => $product_code,
                'producttype' => $product_type,
                'productclass' => $product_class,
            ));

    }

    public function productin()
    {
        $product_in = DB::table('product_log')
            ->join('product_status', 'product_log.product_status_id', '=', 'product_status.product_status_id')
            ->join('product', 'product.uid', '=', 'product_log.product_uid')
            ->where('product_log.product_status_id', '=', '1')
            ->get();
        $product_log = DB::table('product')
            ->get();
        return view('productin',
            array(
                'productInList' => $product_in,
                'productt' => $product_log,

            ));
    }

    public function productout()
    {
        $product_out = DB::table('product_log')
            ->join('product_status', 'product_log.product_status_id', '=', 'product_status.product_status_id')
            ->join('product', 'product.uid', '=', 'product_log.product_uid')
            ->where('product_log.product_status_id', '=', '2')
            ->get();
        $product_out2 = DB::table('product')
            ->get();
        return view('productout',
            array(
                'productOutList' => $product_out,
                'productt' => $product_out2,
            ));
    }

    public function productexp()
    {
        $product_exp = DB::table('product')
            ->join('product_type', 'product.product_group', '=', 'product_type.uid_product_type')
            ->where('product_amount', '<', '50')
            ->get();
        return view('productexp',
            array(
                'productexplist' => $product_exp,

            ));
    }

    public function producttype()
    {
        $product_type = DB::table('product_type')
            ->get();
        return view('producttype',
            array(
                'producttypelist' => $product_type,

            ));
    }

    public function productclass()
    {
        $product_class = DB::table('product_class')
            ->get();
        return view('productclass',
            array(
                'productclasslist' => $product_class,

            ));
    }
    

//**" insert  "******************************************************************************################ */
    public function inRegister(Request $request)
    {
        //เอา insert_ID //inserProductlist
        $last_id_employee = DB::table('product')->insertGetId([
            'product_barcode' => $request->input('product_barcode'),
            'product_detail' => $request->input('product_detail'),
            'product_unit' => $request->input('product_unit'),
            'product_group' => $request->input('product_group'),
            'product_amount' => $request->input('product_amount'),
            'product_acc' => $request->input('product_acc'),
            'product_price' => $request->input('product_price'),
            'product_replace' => $request->input('product_replace'),
            'product_class_no' => $request->input('product_class_no'),
            'product_min' => $request->input('product_min'),
            'product_exp' => $request->input('product_exp'),

        ]);
        return redirect()->route('productlist');
    }

    public function inProductType(Request $request)
    {
        //เอา insert_ID
        $last_id_employe1e = DB::table('product_type')->insertGetId([
            'product_code' => $request->input('product_code'),
            'product_multiply' => $request->input('product_multiply'),

        ]);
        return redirect()->route('producttype');
    }

    public function inProductClass(Request $request)
    {
        //เอา insert_ID
        $last_id_employe1e = DB::table('product_class')->insertGetId([
            'product_class_code' => $request->input('product_class_code'),
            'product_class_detail' => $request->input('product_class_detail'),

        ]);
        return redirect()->route('productclass');
    }


    public function inProductIn(Request $request)
    {
        $logexp = $request->input('logexp');
        $adate = date('Y-m-d');
        $exple = date("Y-m-d",strtotime("+$logexp days",strtotime($adate)));
        //เอา insert_ID
        $barcodelot = $request->input('barcodelot').$request->input('lot');
        $last_id_employe1e = DB::table('product_log')->insertGetId([
            'product_uid' => $request->input('id'),
            'product_detail' => $request->input('detail'),
            'product_log_amount' => $request->input('amount'),
            'product_log_by' => $request->input('by'),
            'product_log_detail' => $request->input('lot'),
            'product_status_id' => '1',
            'product_log_date' => date('Y-m-d H:i:s'),
            'lot_barcode' => $barcodelot,
            'product_log_exp' => $exple,
        ]);
        $member =   DB::table('product_log')
            ->where('product_log_id',$last_id_employe1e)
            ->first();
            
        $data['member']   = $member;
        
        echo json_encode($data);    
    }

    public function inProductOut(Request $request)
    {
        //เอา insert_ID
        $last_id_employe1e = DB::table('product_log')->insertGetId([
            'product_uid' => $request->input('id'),
            'product_detail' => $request->input('detail'),
            'product_log_amount' => $request->input('amount'),
            'product_log_by' => $request->input('by'),
            'product_log_detail' => $request->input('lot'),
            'product_status_id' => '2',
            'product_log_date' => date('Y-m-d H:i:s'),
        ]);
        $member =   DB::table('product_log')
        ->where('product_log_id',$last_id_employe1e)
        ->first();
        
         $data['member']   = $member;
    
    echo json_encode($data);    
    }

    public function update(Request $request)
    {
        $data = array(
            'product_barcode' => $request->input('product_barcode'),
            'product_detail' => $request->input('product_detail'),
            'product_unit' => $request->input('product_unit'),
            'product_group' => $request->input('product_group'),
            'product_amount' => $request->input('product_amount'),
            'product_acc' => $request->input('product_acc'),
            'product_price' => $request->input('product_price'),
            'product_replace' => $request->input('product_replace'),
            'product_class_no' => $request->input('product_class_no'),
            'product_exp' => $request->input('product_exp'),
            'product_min' => $request->input('product_min'),
        );
        DB::table('product')->where('uid', $request->input('id'))->update($data);
        return redirect()->route('productlist');
    }


    public function getProduct(Request $request)      
    {   
        $member =   DB::table('product')
        ->join('product_type', 'product.product_group', '=', 'product_type.uid_product_type')
            ->where('product_barcode',$request->id)
            ->first();
            
          $lot = DB::table('lot')
          ->where('lot_month',date('m'))
          ->where('lot_day',date('d'))
          ->first();  
        $data['member']   = $member;
        $data['lot']=$lot;
        
        echo json_encode($data);     
    }


    // public function json_change_categories_sub1(Request $request){
    //     $categories = $request->input('categories');    
    //     if(($categories=='1')||($categories=='2')){
    //         $query_type = DB::table('lu_categories_sub1')->where('categories_fk',$categories)->get();
    //     }else{
    //         $query_type = DB::table('lu_categories_sub1')->where('categories_fk','0')->get();
    //     }     
    //     return $query_type;
    // }

    



    public function addlot(Request $request)
    {
        $a = 1;
        for ($i = 1; $i <= 12; $i++) {

            if ($i == 1 or $i == 3 or $i == 5 or $i == 7 or $i == 8 or $i == 10 or $i == 12) {
                for ($o = 1; $o <= 31; $o++) {
                    $last_id_employe1e = DB::table('lot')->insertGetId([
                        'lot_day' => sprintf("%'.02d", $o),
                        'lot_month' => sprintf("%'.02d", $i),
                        'lot_code' => sprintf("%'.03d", $a),

                    ]);

                    $a++;
                }
            }
            if ($i == 2) {
                for ($o = 1; $o <= 29; $o++) {
                    $last_id_employe1e = DB::table('lot')->insertGetId([
                        'lot_day' => sprintf("%'.02d", $o),
                        'lot_month' => sprintf("%'.02d", $i),
                        'lot_code' => sprintf("%'.03d", $a),

                    ]);
                    $a++;
                }
            }
            if ($i == 4 or $i == 6 or $i == 9 or $i == 11) {
                for ($o = 1; $o <= 30; $o++) {
                    $last_id_employe1e = DB::table('lot')->insertGetId([
                        'lot_day' => sprintf("%'.02d", $o),
                        'lot_month' => sprintf("%'.02d", $i),
                        'lot_code' => sprintf("%'.03d", $a),

                    ]);
                    $a++;
                }
            }

        }
    }
    
    
    
    
    
    
    
    
    
   
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

}

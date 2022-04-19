<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Employee;
use Cart;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    public function welcome()
    {
        return view('welcome');
    }

    public function Logout()
    {
        Auth::logout();
        return Redirect()->route('login');
    }

    // all-product-part***************************************************************

    public function allProduct()
    {
        $products = DB::table('products')->get();
        return view('allProduct', compact('products'));
    }

    public function addProduct()
    {
        return view('addproduct');
    }

    public function product(Request $request)
    {
        $data = [];
        $data['product_name'] = $request->product_name;
        $data['cat_id'] = $request->cat_id;
        $data['product_code'] = $request->product_code;
        $data['unit'] = $request->unit;
        $data['buy_price'] = $request->buy_price;
        $data['sell_price'] = $request->sell_price;
        $image = $request->file('product_image');

        if ($image) {
            $image_name = str_random(5);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/products/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            if ($success) {
                $data['product_image'] = $image_url;
                $product = DB::table('products')->insert($data);
                if ($product) {
                    $notification = [
                        'messege' => 'Successfully product Inserted ',
                        'alert-type' => 'success',
                    ];
                    return Redirect()
                        ->route('allProduct')
                        ->with($notification);
                } else {
                    $notification = [
                        'messege' => 'error ',
                        'alert-type' => 'success',
                    ];
                    return Redirect()
                        ->back()
                        ->with($notification);
                }
            } else {
                return Redirect()->back();
            }
        } else {
            return Redirect()->back();
        }
    }

    public function deleteProduct($id)
    {
        $delete = DB::table('products')
            ->where('id', $id)
            ->delete();
        if ($delete) {
            $notification = [
                'messege' => 'Successfully Employee delete ',
                'alert-type' => 'success',
            ];
            return Redirect()
                ->route('allProduct')
                ->with($notification);
        } else {
            $notification = [
                'messege' => 'error ',
                'alert-type' => 'success',
            ];
            return Redirect()
                ->back()
                ->with($notification);
        }
    }

    public function editProduct($id)
    {
        $edit = DB::table('products')
            ->where('id', $id)
            ->first();
        return view('edit_product', compact('edit'));
    }

    public function updateProduct(Request $request, $id)
    {
        $data['product_name'] = $request->product_name;
        $data['cat_id'] = $request->cat_id;
        $data['product_code'] = $request->product_code;
        $data['unit'] = $request->unit;
        $data['buy_price'] = $request->buy_price;
        $data['sell_price'] = $request->sell_price;
        $image = $request->file('product_image');

        if ($image) {
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/products/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            if ($success) {
                $data['product_image'] = $image_url;
                $img = DB::table('products')
                    ->where('id', $id)
                    ->first();
                $image_path = $img->product_image;
                $done = unlink($image_path);
                $product = DB::table('products')
                    ->where('id', $id)
                    ->update($data);
                if ($product) {
                    $notification = [
                        'messege' => 'Successfully products Update ',
                        'alert-type' => 'success',
                    ];
                    return Redirect()
                        ->route('allProduct')
                        ->with($notification);
                } else {
                    $notification = [
                        'messege' => 'error ',
                        'alert-type' => 'success',
                    ];
                    return Redirect()
                        ->back()
                        ->with($notification);
                }
            } else {
                return Redirect()->back();
            }
        } else {
            return Redirect()->back();
        }
    }

    // employee-part*********************************************************************

    public function addEmployee()
    {
        return view('addemployee');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:20',
            'phone' => 'required',
            'salary' => 'required',
            'photo' => 'required',
        ]);
        $data = [];
        $data['name'] = $request->name;
        $data['phone'] = $request->phone;
        $data['salary'] = $request->salary;
        $image = $request->file('photo');

        if ($image) {
            $image_name = str_random(5);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/employee/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            if ($success) {
                $data['photo'] = $image_url;
                $employee = DB::table('employees')->insert($data);
                if ($employee) {
                    $notification = [
                        'messege' => 'Successfully Employee Inserted ',
                        'alert-type' => 'success',
                    ];
                    return Redirect()
                        ->route('allEmployee')
                        ->with($notification);
                } else {
                    $notification = [
                        'messege' => 'error ',
                        'alert-type' => 'success',
                    ];
                    return Redirect()
                        ->back()
                        ->with($notification);
                }
            } else {
                return Redirect()->back();
            }
        } else {
            return Redirect()->back();
        }
    }

    public function allEmployee()
    {
        $employees = Employee::all();
        return view('allemployee', compact('employees'));
    }

    // delete-employee

    public function deleteEmployee($id)
    {
        $delete = DB::table('employees')
            ->where('id', $id)
            ->delete();
        if ($delete) {
            $notification = [
                'messege' => 'Successfully Employee delete ',
                'alert-type' => 'success',
            ];
            return Redirect()
                ->route('allEmployee')
                ->with($notification);
        } else {
            $notification = [
                'messege' => 'error ',
                'alert-type' => 'success',
            ];
            return Redirect()
                ->back()
                ->with($notification);
        }
    }

    // edit-employee

    public function editEmployee($id)
    {
        $edit = DB::table('employees')
            ->where('id', $id)
            ->first();
        return view('edit_employee', compact('edit'));
    }

    // update-employee

    public function updateEmployee(Request $request, $id)
    {
        $data = [];
        $data['name'] = $request->name;
        $data['phone'] = $request->phone;
        $data['salary'] = $request->salary;
        $image = $request->photo;

        if ($image) {
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/employee/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            if ($success) {
                $data['photo'] = $image_url;
                $img = DB::table('employees')
                    ->where('id', $id)
                    ->first();
                $image_path = $img->photo;
                $done = unlink($image_path);
                $post = DB::table('employees')
                    ->where('id', $id)
                    ->update($data);
                if ($post) {
                    $notification = [
                        'messege' => 'Successfully Employee Update ',
                        'alert-type' => 'success',
                    ];
                    return Redirect()
                        ->route('allEmployee')
                        ->with($notification);
                } else {
                    $notification = [
                        'messege' => 'error ',
                        'alert-type' => 'success',
                    ];
                    return Redirect()
                        ->back()
                        ->with($notification);
                }
            } else {
                return Redirect()->back();
            }
        } else {
            return Redirect()->back();
        }
    }

    // Category-part *************************************************************

    public function allCategory()
    {
        $categorys = DB::table('categorys')->get();
        return view('allcategory', compact('categorys'));
    }

    public function addCategory()
    {
        return view('addcategory');
    }

    public function category(Request $request)
    {
        $data = [];
        $data['name'] = $request->name;
        $cat = DB::table('categorys')->insert($data);

        if ($cat) {
            $notification = [
                'messege' => 'Successfully Category Inserted ',
                'alert-type' => 'success',
            ];
            return Redirect()
                ->route('allCategory')
                ->with($notification);
        } else {
            $notification = [
                'messege' => 'error ',
                'alert-type' => 'success',
            ];
            return Redirect()
                ->back()
                ->with($notification);
        }
    }

    //delete category
    public function deleteCategory($id)
    {
        $delete = DB::table('categorys')
            ->where('id', $id)
            ->delete();
        if ($delete) {
            $notification = [
                'messege' => 'Successfully categorys delete ',
                'alert-type' => 'success',
            ];
            return Redirect()
                ->route('allCategory')
                ->with($notification);
        } else {
            $notification = [
                'messege' => 'error ',
                'alert-type' => 'success',
            ];
            return Redirect()
                ->back()
                ->with($notification);
        }
    }

    // edit-category

    public function editCategory($id)
    {
        $edit = DB::table('categorys')
            ->where('id', $id)
            ->first();
        return view('edit_category', compact('edit'));
    }

    public function updateCategory(Request $request, $id)
    {
        $data = [];
        $data['name'] = $request->name;
        $cat = DB::table('categorys')
            ->where('id', $id)
            ->update($data);

        if ($cat) {
            $notification = [
                'messege' => 'Successfully Category Inserted ',
                'alert-type' => 'success',
            ];
            return Redirect()
                ->route('allCategory')
                ->with($notification);
        } else {
            $notification = [
                'messege' => 'error ',
                'alert-type' => 'success',
            ];
            return Redirect()
                ->back()
                ->with($notification);
        }
    }

    //pos******************************************************************************

    public function pos()
    {
        $products = DB::table('products')->get();
        return view('pos', compact('products'));
    }

    public function cart(Request $request)
    {
        $data = [];
        $data['id'] = $request->id;
        $data['name'] = $request->name;
        $data['qty'] = $request->qty;
        $data['price'] = $request->price;

        $add = Cart::add($data);
        if ($add) {
            $notification = [
                'messege' => 'Successfully Added ',
                'alert-type' => 'success',
            ];
            return Redirect()
                ->back()
                ->with($notification);
        } else {
            $notification = [
                'messege' => 'error ',
                'alert-type' => 'success',
            ];
            return Redirect()
                ->back()
                ->with($notification);
        }
    }

    public function cartUpdate(Request $request, $rowId)
    {
        $qty = $request->qty;
        $update = Cart::update($rowId, $qty);
        if ($update) {
            $notification = [
                'messege' => 'Successfully update ',
                'alert-type' => 'success',
            ];
            return Redirect()
                ->back()
                ->with($notification);
        } else {
            $notification = [
                'messege' => 'error ',
                'alert-type' => 'success',
            ];
            return Redirect()
                ->back()
                ->with($notification);
        }
    }

    public function remove($rowId)
    {
        $remove = Cart::remove($rowId);
        if ($remove) {
            $notification = [
                'messege' => 'Successfully remove ',
                'alert-type' => 'success',
            ];
            return Redirect()
                ->back()
                ->with($notification);
        } else {
            $notification = [
                'messege' => 'remove ',
                'alert-type' => 'success',
            ];
            return Redirect()
                ->back()
                ->with($notification);
        }
    }

    // pos invoice

    public function invoice(Request $request)
    {
        $contents = Cart::content();
        return view('invoice', compact('contents'));
    }

    public function finalInvoice(Request $request)
    {
        $data = [];
        $data['payment_status'] = $request->payment_status;
        $data['size'] = $request->size;
        $data['pay'] = $request->pay;
        $data['due'] = $request->due;
        $data['payment_status'] = $request->payment_status;
        $data['Customar_name'] = $request->Customar_name;
        $data['Customar_phone'] = $request->Customar_phone;
        $data['Customar_email'] = $request->Customar_email;
        $data['order_status'] = $request->order_status;
        $data['total_products'] = $request->total_products;
        $data['sub_total'] = $request->sub_total;

        $order_id = DB::table('orders')->insertGetId($data);
        $contents = Cart::content();
        $odata = [];

        foreach ($contents as $content) {
            $odata['order_id'] = $order_id;
            $odata['product_id'] = $content->id;
            $odata['quantity'] = $content->qty;
            $odata['unitcost'] = $content->price;
            $odata['total'] = $content->subtotal;

            $ins = DB::table('orderdetails')->insert($odata);
        }

        if ($ins) {
            $notification = [
                'messege' => 'Successfully Order Complete, thanks to connected with us, your order will be approved by admin',
                'alert-type' => 'error',
            ];
            Cart::destroy();
            return Redirect()
                ->route('pos')
                ->with($notification);
        } else {
            $notification = [
                'messege' => 'remove',
                'alert-type' => 'success',
            ];
            return Redirect()
                ->back()
                ->with($notification);
        }
    }

    //order-part

    public function pending()
    {
        $pending = DB::table('orders')
            ->where('order_status', 'pending')
            ->get();
        return view('pendingOrders', compact('pending'));
    }

    // view order

    public function viewOrder($id)
    {
        $order = DB::table('orders')
            ->where('orders.id', $id)
            ->first();
        $orderDetails = DB::table('orderdetails')
            ->join('products', 'orderdetails.product_id', 'products.product_code')
            ->select('orderdetails.*', 'products.product_name', 'products.product_image')
            ->where('order_id', $id)
            ->get();
        return view('ordersDetails', compact('order', 'orderDetails'));
    }

    // pos done

    public function posDone($id)
    {   

        $product=DB::table('orderdetails')->where('order_id',$id)->get();
         foreach ($product as $row ) {
             DB::table('products')
             ->where('product_code',$row->product_id)
             ->update(['unit' => DB::raw('unit -'.$row->quantity)]);
         }

        $approve = DB::table('orders')
            ->where('id', $id)
            ->update(['order_status' => 'success']);
        if ($approve) {
            $notification = [
                'messege' => 'Successfully Order Approved By Admin',
                'alert-type' => 'error',
            ];
            return Redirect()
                ->route('pending-orders')
                ->with($notification);
        } else {
            $notification = [
                'messege' => 'remove',
                'alert-type' => 'success',
            ];
            return Redirect()
                ->back()
                ->with($notification);
        }

    }

    // success-order

    public function success()
    {
        $success = DB::table('orders')
            ->where('order_status', 'success')
            ->get();
        return view('success', compact('success'));
    }



    // all customar

    public function customar()
    {
        $customar = DB::table('orders')->get();
        return view('allcustomar', compact('customar'));
    }


    public function addexpences()
    {
        return view('addexpances'); 
    
    }


    public function expances(Request $request)
    {
        $data = [];
        $data['about'] = $request->about;
        $data['amount'] = $request->amount;
        $expances = DB::table('expances')->insert($data);
        if ($expances) {
            $notification = [
                'messege' => 'Successfully Added',
                'alert-type' => 'error',
            ];
            return Redirect()
                ->route('allexpences')
                ->with($notification);
        } else {
            $notification = [
                'messege' => 'remove',
                'alert-type' => 'success',
            ];
            return Redirect()
                ->back()
                ->with($notification);
        }
    }

    public function allexpences()
    {
        $amount = DB::table('expances')->get();
        return view('allexpances', compact('amount'));
    }


    // add user 

    public function adduser()
    {
        $user=DB::table('admin')->where('type', 2)->get();
         return view('adduser', compact('user'));
    }



}

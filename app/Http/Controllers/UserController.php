<?php

namespace App\Http\Controllers;

use App\activity;
use App\command_emis;
use App\comment;
use App\contact;
use App\event;
use App\idea;
use App\product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    
    public function form_add_idea(Request $request)
    {
        $Add_idea = new idea();

        if ($Add_idea) {

            $Add_idea->name = $request->input('name_idea');
            $Add_idea->email = $request->input('email_idea');
            $Add_idea->objet = $request->input('objet');
            $Add_idea->message = $request->input('message');
            
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();// extension
                $filename = time().'.'.$extension;
                $file->move('uploads/idea/', $filename);
                $Add_idea->image = $filename;
            }else {
                return $request;
                $Add_idea->image = '';
            }
            
            $Add_idea->provider = $request->input('provider');

            $Add_idea->save();

            if ($Add_idea) {
                return redirect('/idea')->with('success', 'product OK');
            } else {
                return redirect('/idea')->with('error', 'product NON');
            }
            

        } else {
            return view('/idea')->with('status_err', $request);
        }
    }

    public function detail_event($id)
    {
        $event = event::find($id);
        return view('detail_event')->with('event',$event);
    }

    public function detail_activity($id)
    {
        $activity = activity::find($id);
        return view('detail_activity')->with('activity',$activity);
    }

    public function specific_activity(Request $request)
    {
        $specific_activity = DB::table('activity')
                            ->Orwhere('club','LIKE','%'.$request->input('type').'%')
                            ->Orwhere('description','LIKE','%'.$request->input('type').'%')
                            ->Orwhere('club','LIKE','%'.$request->input('type').'%')
                            ->paginate(20);
        return view('specific_activity')->with('specific_activity',$specific_activity);
    }

    public function form_add_comment(Request $request)
    {
        $Add_idea = new comment();

        if ($Add_idea) {

            $Add_idea->name = $request->input('name_comment');
            $Add_idea->email = $request->input('email_comment');
            $Add_idea->id_table = $request->input('id_table');
            $Add_idea->motif = $request->input('motif');
            $Add_idea->title = $request->input('title_comment');
            $Add_idea->type = $request->input('type');
            $Add_idea->comment = $request->input('comment');
            $Add_idea->provider = $request->input('provider');

            $Add_idea->save();

            if ($Add_idea) {
                return redirect()->back()->with('success', 'product OK');
            } else {
                return redirect()->back()->with('error', 'product NON');
            }
            

        } else {
            return redirect()->back()->with('status_err', $request);
        }
    }

    public function contact_form(Request $request)
    {
        $contact = new contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->tel = $request->input('phone');
        $contact->objet = $request->input('subject');
        $contact->message = $request->input('message');
        $contact->save();
        if ($contact) {
            return redirect()->back()->with('success', 'product OK');
        } else {
            return redirect()->back()->with('error', 'product NON');
        }
    }

    public function add_to_cart(Request $request)
    {
        if ($request) {
            Cart::add(
                $request->input('id_product'),
                $request->input('name_product'),
                $request->input('quantity_product'),
                $request->input('price_product')
            );
            return redirect('/cart')->with('success');
        } else {
            return redirect('/cart')->with('error');
        }
        
    }


    public function add_wishlist(Request $request)
    {
        Cart::instance('wishlist')->add($request->input('id_product'), $request->input('name_product'), $request->input('quantity_product'), $request->input('price_product'), ['size' => 'medium']);
        return redirect()->back()->with('success', 'product OK');
    }


    public function detail_shop(Request $request, $id)
    {
        $detail_shop = product::find($id);
        return view('product_detail')->with('detail_shop', $detail_shop);
    }

    public function specific_market(Request $request)
    {
        $specific_market = DB::table('product')
                            ->Orwhere('provider','LIKE','%'.$request->input('type').'%')
                            ->Orwhere('product_type','LIKE','%'.$request->input('type').'%')
                            ->Orwhere('description','LIKE','%'.$request->input('type').'%')
                            ->Orwhere('category','LIKE','%'.$request->input('type').'%')
                            ->paginate(20);
        return view('specific_market')->with('specific_market',$specific_market);
    }

    public function search_product(Request $request)
    {
      
       if($request->ajax()){
    
         $output="";
         $i=0;
         
         $search = product::where('title','LIKE','%'.$request->search."%")
                                    ->Orwhere('description','LIKE','%'.$request->search."%")
                                    ->Orwhere('category','LIKE','%'.$request->search."%")
                                    ->paginate(9);
         
         if($search){
      
            foreach ($search as  $item) {
            
                $output.= '<div class="ps-product__column ">'.
                '<div class="ps-shoe mb-30 ">'.
                    '<div class="ps-shoe__thumbnail ">'.
                        '<div class="ps-badge ">'.
                            '<span>Good</span>'.
                        '</div>'.
                        '<div class="ps-badge col-green ps-badge--sale ps-badge--2nd success alert-success">'.
                            '<span><small> -</small> <small>'.$item->remise.'%</small></span>'.
                        '</div>'.
                        '<a class="ps-shoe__favorite " href="javascript:void()"><i class="icon-copy fa fa-heart" aria-hidden="true"></i></a><img src="uploads/product/'.$item->image.'" width="800px" height="275px" alt=" ">'.
                        '<a class="ps-shoe__overlay " href="/product/product-detail/'.$item->id.'"></a>'.
                    '</div>'.
                    '<div class="ps-shoe__content ">'.
                        '<div class="ps-shoe__detail "><a class="ps-shoe__name " style="text-transform: uppercase;" href="# ">'.$item->title.'</a>'.
                            '<p class="ps-shoe__categories ">'
                                .$item->category.
                            '</p>'.
                            '<span class="ps-shoe__price ">'.
                                '<br />'.number_format($item->price).'XAF'.
                            '</span>'.
                        '</div>'.
                    '</div>'.
                '</div>'.
            '</div>';
            }
            return $output;  
 
         }else {
            $output.='<div class="col-md-12">
							<div class="card full-height ">
								<div class="card-body">
                                    <div class="alert alert-danger" role="alert">
                                        <b>AUCUN product AVEC CES IDENTIFIANTS</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                ';
                
            return $output;  
         }
   
       }
 
    }

    public function call_market(Request $request)
    {
        if (Cart::content()->count() > 0) {

            $array = array();
            $command_emis = new command_emis();

            $idProduct = array();
            $allProduct = array();
            $allQuantityCommande = array();
            $allPriceUnitaire = array();
            $allPriceTotal = array();
            $totalCommande = Cart::count();
            $totalFacture = 0;

            foreach (Cart::content() as $key ) {

                //for ($i=0; $i < Cart::content()->count(); $i++) { 

                    array_push($idProduct, $key->id);
                    array_push($allProduct, $key->name);
                    array_push($allQuantityCommande, $key->qty);
                    array_push($allPriceUnitaire, $key->price);
                    array_push($allPriceTotal, $key->subtotal);
                    $totalFacture += $key->subtotal;
                //}
            }


            $command_emis->identifiantFacture = 'COMMANDE Life-Market DE '.$request->input('name').' POUR Les produits '.json_encode($allProduct).' avec les quantites respectives de'.json_encode($allQuantityCommande).' et de prix de '.json_encode($allPriceUnitaire).' Pour un total de '.Cart::subtotal().' XAF';
            $command_emis->id_user = $request->input('id_user');
            $command_emis->name = $request->input('name');
            $command_emis->email = $request->input('email');
            $command_emis->tel = $request->input('tel');
            $command_emis->table = 'shop';
            $command_emis->idProduct = json_encode($idProduct);
            $command_emis->allProduct = json_encode($allProduct);
            $command_emis->allQuantityCommande = json_encode($allQuantityCommande);
            $command_emis->allPriceUnitaire = json_encode($allPriceUnitaire);
            $command_emis->allPriceTotal = json_encode($allPriceTotal);
            $command_emis->totalCommande = ($totalCommande);
            $command_emis->totalFacture = ($totalFacture);
            $command_emis->send_SMS = false;
            $command_emis->save();

            if ($command_emis) {
                Cart::destroy();
                return redirect('/shop')->with('success', 'VOTRE COMMANDE EST BIEN ENVOYE VOUS RECEVREZ UN APPEL');
            } else {
                return redirect('/shop')->with('error', 'UNE ERREUR DANS LA VALIDATION ');
            }
            
        }else {
            return redirect('/shop')->with('error', 'UNE ERREUR DANS LA VALIDATION ');
        }
    }
}

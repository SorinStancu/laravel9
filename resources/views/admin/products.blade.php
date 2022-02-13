@extends('layout.master')

@section('content')

{{--        @livewire('click')--}}
{{--        <livewire:show-hide-component >--}}

    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12 project-list wow BounceInUp" style="visibility: visible; animation-name: bounceInUp;">

                <div class="card">

                    <div class="row">

                        <div class="col-md-6 ">

                            <H5><?php //if($classsetari->setari['multilingv'] == 'da'): ?>

                                <div class='nav-right col-6 pull-right right-header p-0' style='float:left;

                                width:50px;' >

                                    <ul class='nav-menus'>

                                        <li class='language-nav'>

                                            <div class='translate_wrapper'>

                                                <div class='lang'>

                                                    <i class='flag-icon flag-icon-<?//= $classlang->presclang ?>'></i>

                                                </div>

                                            </div>

                                        </li>

                                    </ul>

                                </div>

															<?php //endif ?>
                                Produse

                            </H5>

                            <ul class="nav nav-tabs border-tab">

                                <li class="nav-item" style="margin-top:7px;">Nr. produse: <? /*$classproduse->produse();
        echo number_format($classproduse->nrproduse, 0);*/ ?> &nbsp;&nbsp;<strong>|</strong>&nbsp;&nbsp;

                                </li>

                                <li class="nav-item" style="margin-top:7px;">Nr. produse

                                    active: <? /*$classproduse->produse("", "da");
        echo number_format($classproduse->nrproduse, 0);*/ ?> &nbsp;&nbsp;<strong>|</strong>&nbsp;&nbsp;

                                </li>

                                <li class="nav-item" style="margin-top:7px;">Nr. produse

                                    inactive: <? /*$classproduse->produse("", "nu");
        echo number_format($classproduse->nrproduse, 0);*/ ?></li>

                            </ul>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group mb-0 me-0"></div>

                            <button class="btn btn-primary-gradien" type="button" name="add" value="add"

                                    onclick="javascript:location.href='add_products.php'" data-bs-toggle="tooltip"

                                    data-bs-placement="top" title="Adauga produs" data-bs-original-title=""
                            ><i

                                        data-feather="plus"
                                ></i> Adauga

                            </button>

                        </div>

                    </div>

                </div>

            </div>

            <div class="container-fluid product-wrapper">

                <div class="product-grid">

                    <div class="feature-products">

                        <div class="row">

                            <div class="col-md-6 products-total">

                                <div class="square-product-setting d-inline-block"><a

                                            class="icon-grid grid-layout-view" href="#"

                                            data-original-title="" title=""

                                            data-bs-original-title=""
                                    >

                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"

                                                height="24" viewBox="0 0 24 24" fill="none"

                                                stroke="currentColor" stroke-width="2"

                                                stroke-linecap="round" stroke-linejoin="round"

                                                class="feather feather-grid"
                                        >

                                            <rect x="3" y="3" width="7" height="7"></rect>

                                            <rect x="14" y="3" width="7" height="7"></rect>

                                            <rect x="14" y="14" width="7" height="7"></rect>

                                            <rect x="3" y="14" width="7" height="7"></rect>

                                        </svg>

                                    </a></div>

                                <div class="square-product-setting d-inline-block"><a

                                            class="icon-grid m-0 list-layout-view" href="#"

                                            data-original-title="" title=""

                                            data-bs-original-title=""
                                    >

                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"

                                                height="24" viewBox="0 0 24 24" fill="none"

                                                stroke="currentColor" stroke-width="2"

                                                stroke-linecap="round" stroke-linejoin="round"

                                                class="feather feather-list"
                                        >

                                            <line x1="8" y1="6" x2="21" y2="6"></line>

                                            <line x1="8" y1="12" x2="21" y2="12"></line>

                                            <line x1="8" y1="18" x2="21" y2="18"></line>

                                            <line x1="3" y1="6" x2="3" y2="6"></line>

                                            <line x1="3" y1="12" x2="3" y2="12"></line>

                                            <line x1="3" y1="18" x2="3" y2="18"></line>

                                        </svg>

                                    </a></div>

                                <span class="d-none-productlist filter-toggle">

                          Filters<span class="ms-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"

                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"

                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"

                                                class="feather feather-chevron-down toggle-data"
                                        ><polyline

                                                    points="6 9 12 15 18 9"
                                            ></polyline></svg></span></span>

                                <div class="grid-options d-inline-block">

                                    <ul>

                                        <li><a class="product-2-layout-view" href="#"

                                                    data-original-title="" title=""

                                                    data-bs-original-title=""
                                            ><span

                                                        class="line-grid line-grid-1 bg-primary"
                                                ></span><span

                                                        class="line-grid line-grid-2 bg-primary"
                                                ></span></a>

                                        </li>

                                        <li><a class="product-3-layout-view" href="#"

                                                    data-original-title="" title=""

                                                    data-bs-original-title=""
                                            ><span

                                                        class="line-grid line-grid-3 bg-primary"
                                                ></span><span

                                                        class="line-grid line-grid-4 bg-primary"
                                                ></span><span

                                                        class="line-grid line-grid-5 bg-primary"
                                                ></span></a>

                                        </li>

                                        <li><a class="product-4-layout-view" href="#"

                                                    data-original-title="" title=""

                                                    data-bs-original-title=""
                                            ><span

                                                        class="line-grid line-grid-6 bg-primary"
                                                ></span><span

                                                        class="line-grid line-grid-7 bg-primary"
                                                ></span><span

                                                        class="line-grid line-grid-8 bg-primary"
                                                ></span><span

                                                        class="line-grid line-grid-9 bg-primary"
                                                ></span></a>

                                        </li>

                                        <li><a class="product-6-layout-view" href="#"

                                                    data-original-title="" title=""

                                                    data-bs-original-title=""
                                            ><span

                                                        class="line-grid line-grid-10 bg-primary"
                                                ></span><span

                                                        class="line-grid line-grid-11 bg-primary"
                                                ></span><span

                                                        class="line-grid line-grid-12 bg-primary"
                                                ></span><span

                                                        class="line-grid line-grid-13 bg-primary"
                                                ></span><span

                                                        class="line-grid line-grid-14 bg-primary"
                                                ></span><span

                                                        class="line-grid line-grid-15 bg-primary"
                                                ></span></a>

                                        </li>

                                    </ul>

                                </div>

                            </div>

                        </div>

                        <div class="row">

                            <div class="col-sm-3">

                                <div class="product-sidebar">

                                    <div class="filter-section">

                                        <div class="card">

                                            <div class="card-header">

                                                <h6 class="mb-0 f-w-600">Filtre

                                                    <span class="pull-right"><i class="fa fa-chevron-down toggle-data"></i></span>

                                                </h6>

                                            </div>

                                            <div class="left-filter">

                                                <div class="card-body filter-cards-view animate-chk">

                                                    <div class="product-filter">

                                                        <div class="checkbox-animated mt-0">

                                                            <label class="d-block" for="edo-ani5">

                                                                <input class="radio_animated"

                                                                        onclick="javascript:location.href='products.php'"

                                                                        id="edo-ani5" type="radio"

                                                                        data-original-title=""

                                                                        title=""

                                                                        data-bs-original-title=""
                                                                >Pozitie

                                                            </label>

                                                            <label class="d-block" for="edo-ani6">

                                                                <input class="radio_animated"

                                                                        onclick="javascript:location.href='products.php?noi=da'"

                                                                        id="edo-ani6" type="radio"

                                                                        data-original-title=""

                                                                        title=""

                                                                        data-bs-original-title=""
                                                                >Produse noi

                                                            </label> <label class='d-block' for='edo-ani6'>

                                                                <input class='radio_animated'

                                                                        onclick="javascript:location.href='products.php?promo=bara'"

                                                                        id='edo-ani6' type='radio'

                                                                        data-original-title=''

                                                                        title=''

                                                                        data-bs-original-title=''
                                                                >Produse bara promo

                                                            </label>

                                                            <label class="d-block" for="edo-ani7">

                                                                <input class="radio_animated"

                                                                        onclick="javascript:location.href='products.php?pag=<? //= $_GET['pag'] ?>&modif=da'"

                                                                        id="edo-ani7" type="radio"

                                                                        data-original-title=""

                                                                        title=""

                                                                        data-bs-original-title=""
                                                                >Recent modificate

                                                            </label>

                                                            <label class="d-block" for="edo-ani8">

                                                                <input class="radio_animated"

                                                                        onclick="javascript:location.href='products.php?pag=<? //= $_GET['pag'] ?>&pret=asc'"

                                                                        id="edo-ani8" type="radio"

                                                                        data-original-title=""

                                                                        title=""

                                                                        data-bs-original-title=""
                                                                >Pret mic

                                                            </label>

                                                            <label class="d-block" for="edo-ani8">

                                                                <input class="radio_animated"

                                                                        onclick="javascript:location.href='products.php?pag=<? //= $_GET['pag'] ?>&pret=desc'"

                                                                        id="edo-ani8" type="radio"

                                                                        data-original-title=""

                                                                        title=""

                                                                        data-bs-original-title=""
                                                                >Pret mare

                                                            </label>

                                                            <label class="d-block" for="edo-ani9">

                                                                <input class="radio_animated"

                                                                        onclick="javascript:location.href='products.php?pag=<? //= $_GET['pag'] ?>&active=da'"

                                                                        id="edo-ani9" type="radio"

                                                                        data-original-title=""

                                                                        title=""

                                                                        data-bs-original-title=""
                                                                >Produse active

                                                            </label>

                                                            <label class="d-block" for="edo-ani9">

                                                                <input class="radio_animated"

                                                                        onclick="javascript:location.href='products.php?pag=<? //= $_GET['pag'] ?>&active=nu'"

                                                                        id="edo-ani9" type="radio"

                                                                        data-original-title=""

                                                                        title=""

                                                                        data-bs-original-title=""
                                                                >Produse inactive

                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="product-filter">

                                                        <h6 class="f-w-600">Brand</h6>

                                                        <div class="checkbox-animated mt-0" style="height: 500px; overflow: scroll;">

																													<? /*$sql = "select p.id_prod, m.nume from `products` as p, `manufacturers` as m where p.id_prod=m.id && p.activ='da' group by p.id_prod order by m.nume asc ";
              foreach($pdo->query($sql) as $r){*/ ?>

                                                            <label class="d-block" for="<? //= $r['id_prod'] ?>">

                                                                <input class="checkbox_animated"

                                                                        onclick="javascript:location.href='products.php?pag=<? //= $_GET['pag'] ?>&brand=<? //= $r['id_prod'] ?>'"

                                                                        id="<? //= $r['id_prod'] ?>" type="checkbox"

                                                                        data-original-title=""

                                                                        title=""

                                                                        data-bs-original-title=""
                                                                >

																															<? //= $r['nume'] ?>
                                                                <span style="float: right;



                                                                    margin-right: 5px;"
                                                                >[<?/*= $classutile->nr
                (
                        'products', "`id_prod`='" . $r['id_prod'] . "'"
                ); */?>]</span>

                                                            </label>

																													<? //} ?>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="col-md-9 col-sm-12">

                                <form method="get">

                                    <div class="form-group m-0">

                                        <input class="form-control" type="search" id='q' name='q'

                                                onkeyup="showResult(this.value,'<? //= $_SESSION['id_lang'] ?>')"

                                                placeholder="Cauta produse...(denumire sau cod)|(text->enter)"

                                                data-original-title=""

                                                title="" data-bs-original-title=""
                                        ><i

                                                class="fa fa-search"
                                        ></i>

                                    </div>

                                </form>

                            </div>

                        </div>

                    </div>

                    <div class="product-wrapper-grid" style="opacity: 1;">

                        <div class="row">

													<?
													/*if(!$_GET['qcod'] && !$_GET['q']){

                                                     $ww = "`idc` != '' && `id_lang`='" . $_SESSION['id_lang'] . "'";
                                                    }
                                                    if($_GET['promo'] == 'promo') $ww .= "&& promo='da'";
                                                    if($_GET['promo'] == 'noi') $ww .= "&& nou='da'";
                                                    if($_GET['promo'] == 'bara') $ww .= "&& barapromo='da'";
                                                    if($_GET['tip']) $ww .= " && " . $_GET['tip'] . " = 'da'";
                                                    if($_GET['idc']) $ww .= " && idc LIKE '%" . trim($_GET['idc']) . "%'";
                                                    if($_GET['qcod']) $ww .= "  cod = '" . trim($_GET['qcod']) . "'";
                                                    elseif($_GET['q']) $ww .= " denumire LIKE '%" . trim($_GET['q']) . "%'";
                                                    if($_GET['brand']) $ww .= " &&  `id_prod` = '" . trim($_GET['brand']) . "'";
                                                    if($_GET['active']) $ww .= " &&  `activ` = '" . trim($_GET['active']) . "'";
                                                    if($_GET['q']){

                                                     $ww = " ( `denumire` like '%" . trim($_GET['q']) . "%' || `cod` like '%" . trim($_GET['q']) . "%')";
                                                    }
                                                    if($_GET['promo'] == 'bara'){

                                                     $order = "poz_barapromo ASC";
                                                    }
                                                    elseif($_GET['poz']){

                                                     $order = "poz ASC";
                                                    }
                                                    elseif($_GET['noi']){

                                                     $order = "id DESC";
                                                    }
                                                    elseif($_GET['modif']){

                                                     $order = "modif DESC";
                                                    }
                                                    elseif($_GET['pret']){

                                                     $order = "pret ASC";
                                                    }
                                                    else{

                                                     $order = "id DESC";
                                                    }
                                                    if($_GET['promo']){

                                                     $classutile->paginatie("products.php?promo=" . $_GET['promo'] . "&pag=", 'products', $ww, 50);
                                                    }
                                                    else{

                                                     $classutile->paginatie("products.php?q=" . $_GET['q'] . "&tip=" . $_GET['tip'] . "&idc=" . $_GET['idc'] . "&pag=", 'products', $ww, 50);
                                                    }
                                                    $nr = '1';
                                                    $nrrez = $pdo->query("SELECT COUNT(*) FROM `products` WHERE $ww  " . $classutile->limit)->fetchColumn();
                                                    if($_GET['promo'] == 'bara'){

                                                     $nrpoz = $pdo->query("SELECT MAX(`poz_barapromo`) as `maxb` FROM `products` WHERE `activ`='da' && `id_lang`='" . $_SESSION['id_lang'] . "' && `barapromo`='da' ")->fetch();
                                                     $pozitie = $classquery->nr('products', "`activ`='da' && `id_lang`='" . $_SESSION['id_lang'] . "' && `barapromo`='da' ");
                                                    }
                                                    else{

                                                     $nrpoz = $pdo->query("SELECT MAX(poz) as max FROM products WHERE activ='da' && id_lang='" . $_SESSION['id_lang'] . "'")->fetch();
                                                     $pozitie = $nrpoz['max'] + 1;
                                                    }
                                                    ($pozitie > 100) ? $pozitie = '100' : '';

                                                    if($nrrez || $_GET['pag']){

                                                    $q = "SELECT * FROM `products` WHERE $ww ORDER BY $order " . $classutile->limit;
                                                    foreach($pdo->query($q) as $r){*/
													?>
                            @foreach ($produse as $produs)
                                <div class="col-xl-3 col-sm-6 xl-4 wow animated bounceInDown"  >

                                    <div class="card">

                                        <div class="product-box " style="padding:20px;">

                                            <div class="product-img">

                                                <img class="img-fluid"

                                                        src="http://www.westbuy.ro/files/products/{{ $produs->img }}"

                                                        height="150"

                                                        onclick="window.location.href = 'edit_products.php?id=<? //= $r['id'] ?>';"
                                                />

                                                <div class="product-hover">

                                                    <ul>

                                                        <li>

                                                            <button class="btn" type="button"

                                                                    data-bs-toggle="modal"

                                                                    data-bs-target="#exampleModalCenter" >

                                                                <i class="icofont icofont-eye"></i>

                                                            </button>

                                                        </li>

                                                        <li>

                                                            <button class="btn" type="button"

                                                                    data-bs-toggle="modal"

                                                                    data-bs-target="#exampleModalCenter">

                                                                <i class="icofont icofont-pencil-alt-5"></i>

                                                            </button>

                                                        </li>

                                                        <li>

                                                            <button class="btn" type="button"

                                                                    data-bs-toggle="modal"

                                                                    data-bs-target="#exampleModalCenter">

                                                                <i class="icofont icofont icofont-ui-delete"></i>

                                                            </button>

                                                        </li>

                                                    </ul>

                                                </div>

                                            </div>

                                            <h6 style="height: 50px;">

                                                <a href="edit_products.php?id=<? //= $r['id'] ?>">
                                                    {{ $produs->denumire }}
																									<? //= substr($r['denumire'], 0, 40) . '...' ?></a>

                                            </h6>

																					<? //if($classsetari->setari['site'] == 'magazin'){ ?>

                                            <H6 style="float:left;">Brand:
                                            {{ $produs->manufacturers->nume }}
                                            </H6>
                                            <div class="product-price" style="float:right;



                                                        margin-right:20px;"
                                            ><? //= number_format($r['rontva']) ?> <span

                                                        style="font-weight:normal;"
                                                ><? /*$classsetari->traduceri
           (
                   '73', $_SESSION['id_lang']
           )*/ ?></span>

                                            </div>

																					<? //} ?>

                                            <BR clear="all">

																					<? //= ($r['activ'] == 'nu') ? '<span style="color:#BF0101;margin-right:10px;"><strong>Inactiv</strong></span>' : '' ?>


																					<? //if ($_SESSION['acces'] == 'admin' || preg_match("/modificare/", $_SESSION['Produse'])) { ?>

                                            Pozitie:

                                            <select class="form-select form-control-primary" style="width: 100px;" name="<? /*if($_GET['promo'] == 'bara'){

          echo 'poz_bara';
         }
         else{

          echo 'poz';
         }*/ ?>"

                                                    onchange="window.location='products.php?id=<? //= $r['id'] ?><? /*if($_GET['promo']){

                  echo '&promo=' . $_GET['promo'];
                  echo '&poz_bara';
                 }
                 else{

                  echo '&poz';
                 } */?>='+this.options[this.selectedIndex].value"
                                            >

																							<? //if($_GET['promo']){ ?>

																							<? //for($i = 0; $i <= $pozitie; $i++){ ?>

                                                <option value="<? //= $i ?>"<? //= ($r['poz_barapromo'] == $i) ? ' selected="selected"' : '' ?>><? //= $i ?></option>

																							<? /*}
          }
          else{

          for($i = 0; $i <= $pozitie; $i++){*/

																							?>

                                                <option value="<? //= $i ?>"<? //= ($r['poz'] == $i) ? ' selected="selected"' : '' ?>><? //= $i ?></option>

																							<? //}          } ?>

                                            </select><? //} ?>







																					<? //if($_SESSION['acces'] == 'admin' || preg_match("/stergere/", $_SESSION['Produse'])){ ?>

                                            <a href="edit_products.php?id=<? //= $r['id'] ?>"><span

                                                        class="tooltip-element" tooltip="Modificare"

                                                        style="display: inline-block;<? /*if($_GET['promo']){

                   echo 'float: right;';
                  } */?>"
                                                >Edit</span></a>

																					<? //if(!$_GET['promo']){ ?>

                                            <a href="products.php?id=<? //= $r['id'] ?>&sterge=ok&pag=<? //= $_GET['pag'] ?>&poza=<? //= $r['img'] ?>"

                                                    title="Sterge produs" onclick="return cfsterg()"

                                                    style="float: right;"
                                            >







                                  <span class="tooltip-element" tooltip="Stergere"

                                          style="display: inline-block;"
                                  >Delete</span>

                                            </a><? //}          } ?>

                                            <div style="margin-top: 5px;">
																							<? //if(!$_GET['promo']){ ?>
                                                <form method="post">

                                                    <input type="hidden" name="id" value="<? //= $r['id'] ?>">

                                                    <button type="submit" name="duplicat"

                                                            value="DUPLICARE PRODUS"

                                                            class="btn btn-success-gradien"
                                                    >

                                                        <i class="icofont icofont-ui-copy"></i> DUPLICARE PRODUS

                                                    </button>

                                                </form>

																							<? //} ?>

                                            </div>

                                        </div>

                                    </div>

                                </div>
                         @endforeach

                            <br clear="all">
{{--                                                        <div >--}}
{{--                                                            {{ $produs->paginate() }}--}}
{{--                                                           </div>--}}

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
    </div>
@endsection
@section('jsdif')
    <script src="{{ asset('assets/js/product-tab.js') }}" defer></script>
@endsection
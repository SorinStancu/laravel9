@extends('layout.master')
@section('cssdif')
    <link rel='preload' data-preload='1' data-minified='1' as='style' onload='this.rel="stylesheet"' type="text/css" href="{{ asset('assets/css/vendors/select2.css') }}">

    <link rel='preload' data-preload='1' data-minified='1' as='style' onload='this.rel="stylesheet"' type="text/css" href="{{ asset('assets/css/vendors/owlcarousel.css') }}">

    <link rel='preload' data-preload='1' data-minified='1' as='style' onload='this.rel="stylesheet"' type="text/css" href="{{ asset('assets/css/vendors/range-slider.css') }}">

@endsection
@section('content')

    <div class="container-fluid">

        <div class="row">

            <div class="main-content-area">

                <div class="row">

                    <div class="col-md-12">

                        <div class="card" style="padding:20px;">

                            <h5><? //= $prod['denumire'] ?></h5>

                            <ul class="nav nav-pills" id="pills-icontab" role="tablist">

                                <li class="nav-item">

                                    <a class="nav-link <?  // if(!$_SESSION['tab'] || $_SESSION['tab'] == 'date'){ ?>active<? // } ?> " id="pills-iconhome-tab" data-bs-toggle="pill" href="#pills-iconhome" role="tab" aria-controls="pills-iconhome" aria-selected="true" data-bs-original-title="" title=""> <i class="icofont icofont-ui-home"></i>Date principale</a></li>

                                <li class="nav-item">

                                    <a class="nav-link <?  //if($_SESSION['tab'] == 'img'){ ?>active<?// } ?> " id="pills-iconprofile-tab" data-bs-toggle="pill" href="#pills-iconprofile" role="tab" aria-controls="pills-iconprofile" aria-selected="false" data-bs-original-title="" title=""><i class="icon-image"></i> Imagini</a>

                                </li>

                                <li class="nav-item">

                                    <a class="nav-link <? //if($_SESSION['tab'] == 'video'){ ?>active<? //} ?> " id="pills-iconcontact-tab" data-bs-toggle="pill" href="#pills-iconcontact" role="tab" aria-controls="pills-iconcontact" aria-selected="false" data-bs-original-title="" title=""><i class="icon-video-clapper"></i> Video</a>

                                </li>

                                <li class="nav-item">

                                    <a class="nav-link <? //if($_SESSION['tab'] == 'tabs'){ ?>active<? //} ?> " id="pills-icontaburi-tab" data-bs-toggle="pill" href="#pills-icontaburi" role="tab" aria-controls="pills-icontaburi" aria-selected="false" data-bs-original-title="" title=""><i class="icofont icofont-hard-disk"></i> Taburi</a>

                                </li>

                                <li class="nav-item">

                                    <a class="nav-link <? //if($_SESSION['tab'] == 'specificatii'){ ?>active<? //} ?>" id="pills-iconspecific-tab" data-bs-toggle="pill" href="#pills-iconspecific" role="tab" aria-controls="pills-iconspecific" aria-selected="false" data-bs-original-title="" title=""><i class="icofont icofont-architecture-alt"></i> Specificatii tehnice</a>

                                </li>

                                <li class="nav-item">

                                    <a class="nav-link <? //if($_SESSION['tab'] == 'filtre'){ ?>active<? //} ?> " id="pills-iconfiltre-tab" data-bs-toggle="pill" href="#pills-iconfiltre" role="tab" aria-controls="pills-iconfiltre" aria-selected="false" data-bs-original-title="" title=""><i class="icofont icofont-settings"></i> Filtre</a>

                                </li>

                            </ul>

                            <div class="tab-content" id="pills-icontabContent">

                                <div class="tab-pane fade active show" id="pills-iconhome" role="tabpanel" aria-labelledby="pills-iconhome-tab">

                                    <p class="mb-0 m-t-30">

                                    <form method="post" action="" onSubmit="return validare(this)" enctype="multipart/form-data">

                                        <input type="hidden" name="id_lang" value="<?//= $_SESSION[id_lang] ?>"/> <input type="hidden" name="edit" value="da"/> <input type="hidden" name="id" value="<?//= $_GET['id'] ?>"/>

                                        <div class="admin-follow">

                                            <div class="input-group input-group-lg wow bounceInUp" style="width:100%;



                                            margin-bottom:15px;">

                                                <span class='input-group-text' style='width: 200px !important;'>Denumire</span> <input type="text" name="denumire" value="{{--{{$prod->denumire}}--}}" class="form-control" placeholder="Denumire" required/>

                                            </div>

                                            <div class="input-group input-group-lg wow bounceInDown" style="width:100%;



                                            margin-bottom:15px; background-color:#CADCF7">

                                                <span class='input-group-text' style='width: 200px !important;'>Title (SEO)</span> <input type="text" name="title" value="<?//= $prod['title'] ?>" placeholder="Title (SEO)" class="form-control"/>

                                            </div>

                                            <div class="input-group input-group-lg wow bounceInUp" style="width:100%;margin-bottom:15px; background-color:#CADCF7">

                                                <span class='input-group-text' style='width: 200px !important;'>Keyword (SEO)</span> <input type="text" name="keywords" value="<?//= $prod['keywords'] ?>" placeholder="Keyword (SEO)" class="form-control"/>

                                            </div>

                                            <div class="input-group input-group-lg wow bounceInDown" style="width:100%;



                                            margin-bottom:15px; background-color:#CADCF7">

                                                <span class='input-group-text' style='width: 200px !important;'>Desc (SEO)</span> <textarea name="description" class="form-control" placeholder="Desc (SEO)" style="height:100px;"><?//= $prod['description'] ?></textarea>

                                            </div>

                                            <div class="input-group input-group-lg  wow bounceInUp" style="width:100%;



                                            margin-bottom:15px;">

                                                <span class='input-group-text' style='width: 200px !important;'>Categorie</span> <select name="idc" class="form-select form-control-primary" multiple="multiple" size="5">

                                                    <option value="" disabled> -- Selecteaza --</option>

                                                    <!--                                                --><?// $sql = "SELECT * FROM categories WHERE idc='' && id_lang='" . $_SESSION['id_lang'] . "'  ORDER BY poz ASC";
                                                //                                                foreach($pdo->query($sql) as $c){
                                                //                                                ?>

                                                    <option value="|<?//= $c['id'] ?>|" style="font-weight: bold" <?//= ('|' . $c['id'] . '|' == $prod['idc']) ? 'selected="selected"' : '' ?>><?//= $c['name'] ?></option>

                                                    <!--                                                --><?// $sql = "SELECT * FROM categories WHERE idc='|$c[id]|' ORDER BY poz ASC";
                                                //                                                foreach($pdo->query($sql) as $sc){
                                                //                                                ?>

                                                    <option value="|<?//= $c['id'] . '|' . $sc['id'] ?>|" style="padding-left: 27px" <?//= ('|' . $c['id'] . '|' . $sc['id'] . '|' == $prod['idc']) ? 'selected="selected"' : '' ?>><?//= $sc['name'] ?></option>

                                                    <!--                                                --><?// $sql = "SELECT * FROM categories WHERE idc='|$c[id]|$sc[id]|' ORDER BY poz ASC";
                                                //                                                foreach($pdo->query($sql) as $ssc){
                                                //                                                ?>

                                                    <option value="|<?//= $c['id'] . '|' . $sc['id'] . '|' . $ssc['id'] ?>|" style="padding-left: 45px" <?//= ('|' . $c['id'] . '|' . $sc['id'] . '|' . $ssc['id'] . '|' == $prod['idc']) ? 'selected="selected"' : '' ?>><?//= $ssc['name'] ?></option>

                                                    <!--                                                --><?// }
                                                //                                                }
                                                //                                                } ?>

                                                </select>

                                            </div>

                                            <!--                                          --><?// if($classsetari->setari['site'] == 'magazin'){ ?>

                                            <div class='row'>

                                                <div class='col-sm-6'>

                                                    <div class='mb-2'>

                                                        <div class="input-group input-group-lg wow bounceInDown" style="width:100%;



                                                margin-bottom:15px;"
                                                        >

                                                            <span class='input-group-text' style='width: 200px !important;'>Cod produs</span> <input type="text" name="cod" value="<?//= $prod['cod'] ?>" size="40" placeholder="Cod produs" class="form-control"/>

                                                        </div>

                                                    </div>

                                                </div><? //} ?>

                                                <div class='col-sm-6'>

                                                    <div class='mb-2'>

                                                        <div class='input-group input-group-lg wow bounceInUp' style='width:100%;



                                                margin-bottom:15px;' >

                                                            <span class='input-group-text' style='width: 200px !important;'>Disponibil</span> <select name='id_status' class='form-select form-control-primary'>

                                                                <!--                                                            --><?// $afisare = "SELECT * FROM `status` WHERE tip='prod' && activ='da'";
                                                            //                                                            foreach($pdo->query($afisare) as $row){
                                                            //                                                            ?>

                                                                <option value="<?//= $row['id'] ?>" <?//= ($prod['id_status'] == $row['id']) ? 'selected="selected"' : '' ?>><?//= $row['status'] ?></option><? //} ?>

                                                            </select>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class='row'>

                                                <div class='col-sm-6'>

                                                    <div class='mb-2'>

                                                        <div class="input-group input-group-lg wow bounceInUp" style="width:100%;



                                            margin-bottom:15px;">

                                                            <!--                                                          --><?// if($classsetari->setari['moneda'] == 'Euro'){ ?>

                                                            <span class='input-group-text' style='width: 200px !important;'>Pret (Euro)</span><input type="text" name="euro" value="<?//= $prod['pret'] ?>" placeholder="Pret (Euro)" class="form-control"/>

                                                            <!--                                                          --><?// }elseif($classsetari->setari['mobeda'] == 'Leitva'){ ?>

                                                            <span class='input-group-text' style='width: 200px !important;'>Pret (Lei - TVA inclus)</span><input type="text" name="leitva" value="<?//= $prod['rontva'] ?>" placeholder="Pret (Lei - TVA inclus)" class="form-control"/>

                                                            <!--                                                          --><?// }elseif($classsetari->setari['moneda'] == 'Lei'){ ?>

                                                            <span class='input-group-text' style='width: 200px !important;'>Pret (Lei - fara TVA)</span><input type="text" name="lei" value="<?//= $prod['ron'] ?>" placeholder="Pret (Lei - fara TVA)" class="form-control"/>

                                                            <!--                                                          --><?// } ?>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class='col-sm-6'>

                                                    <div class='mb-2'>

                                                        <div class='input-group input-group-lg wow bounceInDown' style='width:100%;



                                                margin-bottom:15px;'
                                                        >

                                                            <span class='input-group-text' style='width: 200px !important;'>Discount</span> <input type='text' name='discount' value="<?//= $prod['discount'] ?>" class='form-control'/>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <!--                                          --><?// if($classsetari->setari['site'] == 'magazin'){ ?><!----><?// if($classsetari->setari['template'] == 'westbuy'){ ?>

                                            <div class="input-group input-group-lg wow bounceInDown" style="width:100%;



                                                margin-bottom:15px;"
                                            >

                                                <span class='input-group-text' style='width: 200px !important;'>Pret vechi</span> <input type="text" name="pret_vechi" value="<?//= $prod['pret_vechi'] ?>" placeholder="Pret vechi" class="form-control"/>

                                            </div>

                                            <div class="input-group input-group-lg wow bounceInUp" style="width:100%;



                                                margin-bottom:15px;"
                                            >

                                                <span class='input-group-text' style='width: 200px !important;'>Fara pret</span> <input type="text" name="farapret" value="<?//= $prod['farapret'] ?>" placeholder="Text in locul pretului" class="form-control"/>

                                            </div> <? //} ?>

                                            <div class="input-group input-group-lg wow bounceInDown" style="width:100%;



                                                margin-bottom:15px;"
                                            >

                                                <span class='input-group-text' style='width: 200px !important;'>Furnizor</span> <select name="id_furn" class="form-select form-control-primary">

                                                    <!--                                                --><?// $afisare = "SELECT * FROM `furnizori`";
                                                //                                                foreach($pdo->query($afisare) as $row){
                                                //                                                ?>

                                                    <option value="<?//= $row['id'] ?>" <?//= ($prod['id_furn'] == $row['id']) ? 'selected="selected"' : '' ?>><?//= $row['nume'] ?></option><? //} ?>

                                                </select>

                                            </div>

                                            <div class="input-group input-group-lg wow bounceInUp" style="width:100%;



                                                margin-bottom:15px;"
                                            >

                                                <span class='input-group-text' style='width: 200px !important;'>Producator</span> <select name="id_prod" class="form-select form-control-primary">

                                                    <option value="" style="font-weight: bold; color: #00C" disabled> -- Selecteaza --</option>

                                                    <!--                                                --><?// $qp = "SELECT * FROM manufacturers";
                                                //                                                foreach($pdo->query($qp) as $rp){
                                                //                                                ?>

                                                    <option value="<?//= $rp['id'] ?>" style="color:#333;" <?//= (($prod['id_prod']) == ($rp['id'])) ? 'selected="selected"' : '' ?>><?//= $rp['nume'] ?></option><? //} ?>

                                                </select>

                                            </div><? //} ?>











                                        <!--                                          --><?// if($classsetari->setari['template'] != 'westbuy'){ ?>

                                            <div class="input-group input-group-lg wow bounceInDown" style="width:100%;



                                                margin-bottom:15px;"
                                            >

                                                <span class='input-group-text' style='width: 200px !important;'>Descriere</span> <textarea name="descriere" class="form-control" style="height:100px;"><?//= $prod['descriere'] ?></textarea>

                                            </div><? //} ?>















                                        <!--                                          --><?// if($classsetari->setari['site'] == 'magazin'){ ?>

                                            <div class="input-group input-group-lg wow bounceInUp" style="width:100%;



                                                margin-bottom:15px;"
                                            >

                                                <span class='input-group-text' style='width: 200px !important;'>Detalii</span> <textarea id="editor1" name="detalii"><?//= stripcslashes($prod['detalii']) ?></textarea>
                                                {{--<!--                                              --><?php ///*$removeTags = 'script|head|style|noscript|link|href';--}}
                                                {{--//	--}}
                                                {{--//	                           $detalii = preg_replace('/<(' . $removeTags . ')? [^>] *> (. *?) / is ', '', $detalii);*/--}}
                                                {{--//                                              ?>--}}
                                                <script>CKEDITOR.replace($detalii);</script>

                                            </div><? //} ?>















                                        <!--                                          --><?// if($classsetari->setari['site'] == 'magazin'){ ?>

                                            <label>

                                                <!--                                              --><?// if($prod['pdf']){ ?>

                                                <br/><a href="<?//= $ladr ?>files/pdf/<?//= $prod['pdf'] ?>" title="Vezi" target="_blank">Vezi manual pdf</a> |<a href="edit_products.php?id=<?//= $_GET['id'] ?>&pdf=<?//= $prod['pdf'] ?>&sterge_pdf=ok&id=<?//= $prod['id'] ?>" title="Sterge manual pdf" onclick="return cfsterg()">Sterge</a><br/>

                                              <? //} ?></label> <br clear="all">

                                            <div class="input-group input-group-lg wow bounceInDown" style="width:100%;



                                                margin-bottom:15px;"
                                            >

                                                <span class='input-group-text' style='width: 200px !important;'>Manual pdf</span> <input type="file" name="pdf" class="form-control"/>

                                            </div>

                                            <div class="input-group input-group-lg wow bounceInUp" style="width:100%;



                                                margin-bottom:15px;"
                                            >

                                                <span class='input-group-text' style='width: 200px !important;'>Bonus</span> <textarea name="bonus" id="editor2"><?//= stripcslashes($prod['bonus']) ?></textarea>

                                                <script>CKEDITOR.replace('bonus');</script>

                                            </div><? //} ?>







                                        <!--                                          --><?// if($classsetari->setari['site'] == 'magazin'){ ?>

                                            <div class='row'>

                                                <label> Produse afisate pe pagina home:
                                                    <!--                                                  --><?//= $prod1 = $classquery->nr(
                                                  //                                                    'products', "home='da'"
                                                  //                                                  ) ?>



                                                  <?// if($prod1 > 0){ ?> (<a href="home_products.php" target="_blank">Vezi produse</a>)<? //} ?></label>

                                                <div class='col-sm-6'>

                                                    <div class='mb-2'>

                                                        <a href="promotie"></a>

                                                        <div class="input-group input-group-lg wow bounceInDown" style="width:100%;



                                                margin-bottom:15px; "
                                                        >

                                                            <span class='input-group-text' style='width: 200px !important;'>Promotie</span> <select name="home" class="form-select form-control-primary"

                                                            <!--                                                            --><?php //if($_GET['promotie'] == 'da'): ?>

                                                            style="border-color: #51bb25;" <?//php endif ?>>

                                                            <option value="da" <?//= ($prod['home'] == 'da') ? 'selected="selected"' : '' ?>>da</option>

                                                            <option value="nu" <?//= ($prod['home'] == 'nu') ? 'selected="selected"' : '' ?>>nu</option>

                                                            </select>

                                                        </div>

                                                        <div class="input-group input-group-lg wow bounceInUp" style="width:100%;



                                                margin-bottom:15px; "
                                                        >



                                                    <span class='input-group-text' style='width: 200px !important;'>Bara



                                                        promo</span> <select name="barapromo" class="form-select form-control-primary">

                                                                <option value="da" <?//= ($prod['barapromo'] == 'da') ? 'selected="selected"' : '' ?>>da</option>

                                                                <option value="nu" <?//= ($prod['barapromo'] == 'nu') ? 'selected="selected"' : '' ?>>nu</option>

                                                            </select>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class='col-sm-6'>

                                                    <div class='mb-2'>

                                                        <div class="input-group input-group-lg wow bounceInDown" style="width:100%;



                                                margin-bottom:15px; "
                                                        >

                                                            <span class='input-group-text' style='width: 200px !important;'>Promotie umanitara</span> <select name="umanitara" class="form-select form-control-primary">

                                                                <option value="da" <?//= ($prod['umanitara'] == 'da') ? 'selected="selected"' : '' ?>>da</option>

                                                                <option value="nu" <?//= ($prod['umanitara'] == 'nu') ? 'selected="selected"' : '' ?>>nu</option>

                                                            </select>

                                                        </div>

                                                        <div class="input-group input-group-lg wow bounceInUp" style="width:100%;



                                                margin-bottom:15px; "
                                                        >

                                                            <span class='input-group-text' style='width: 200px !important;'>Produs nou</span> <select name="nou" class="form-select form-control-primary">

                                                                <option value="da" <?//= ($prod['nou'] == 'da') ? 'selected="selected"' : '' ?>>da</option>

                                                                <option value="nu" <?//= ($prod['nou'] == 'nu') ? 'selected="selected"' : '' ?>>nu</option>

                                                            </select>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class='row'>

                                                <div class='col-sm-6'>

                                                    <div class='mb-2'>

                                                        <div class="input-group input-group-lg wow bounceInDown" style="width:100%;



                                                margin-bottom:15px; "
                                                        >

                                                            <span class='input-group-text' style='width: 200px !important;'>Bonus (icon)</span> <select name="bonus_enum" class="form-select form-control-primary">

                                                                <option value="da" <?//= ($prod['bonus_enum'] == 'da') ? 'selected="selected"' : '' ?>>da</option>

                                                                <option value="nu" <?//= ($prod['bonus_enum'] == 'nu') ? 'selected="selected"' : '' ?>>nu</option>

                                                            </select>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class='col-sm-6'>

                                                    <div class='mb-2'>

                                                        <div class="input-group input-group-lg" style="width:100%;margin-bottom:15px; ">

                                                            <span class='input-group-text' style='width: 200px !important;'>Sale (icon)</span> <select name="sale" class="form-select form-control-primary">

                                                                <option value="da" <?//= ($prod['sale'] == 'da') ? 'selected="selected"' : '' ?>>da</option>

                                                                <option value="nu" <?//= ($prod['sale'] == 'nu') ? 'selected="selected"' : '' ?>>nu</option>

                                                            </select>

                                                        </div>

                                                    </div>

                                                </div>

                                              <? //} ?>

                                            </div>

                                            <div class="input-group input-group-lg" style="width:100%;margin-bottom:15px; ">

                                                <span class='input-group-text' style='width: 200px !important;'>Stare</span> <select name="activ" class="form-select form-control-primary">

                                                    <option value="da" <?//= ($prod['activ'] == 'da') ? 'selected="selected"' : 'selected="selected"' ?>>Activ</option>

                                                    <option value="nu" <?//= ($prod['activ'] == 'nu') ? 'selected="selected"' : '' ?>>Inactiv</option>

                                                </select>

                                            </div>

                                            <div class="col-md-12">

                                                <button type="submit" class="btn btn-success-gradien btn-lg" name="editx" id="submit">

                                                    <i class='fa fa-check text-white'></i> &nbsp;Modifica

                                                </button>

                                            </div>

                                        </div>

                                    </form>

                                    </p></div>

                                <div class="tab-pane fade" id="pills-iconprofile" role="tabpanel" aria-labelledby="pills-iconprofile-tab">

                                    <p class="mb-0 m-t-30">

                                    <form method="post" action="" onSubmit="return validare(this)" enctype="multipart/form-data" name="contactform" id="contactform">

                                        <input type="hidden" name="id_lang" value="<?//= $_SESSION[id_lang] ?>"/> <input type="hidden" name="imag" value="da"/> <input type="hidden" name="id" value="<?//= $_GET['id'] ?>"/>

                                        <div class="admin-follow">

                                            <img src="https://www.westbuy.ro/files/products/" width='200'/><br/> <label> <a href="edit_products.php?id=<?//= $_GET['id'] ?>&img=<?//= $prod[img] ?>&sterge=ok" title='Sterge' onclick='return cfsterg()' class='link1'>Sterge</a><br> </label><br clear='all'>

                                            <div class="input-group input-group-lg" style="width:100%;margin-bottom:15px;">

                                                <span class='input-group-text' style='width: 220px !important;'>Imagine principala</span>

                                                <input type="file" name="poza" class="form-control"/>

                                                <!--                                              --><?// if($classsetari->setari['template'] != 'westbuy'){ ?>

                                                <span class='input-group-text' style='width: 100px;'>Tag 'ALT'</span>

                                                <input type="text" name="altimg" value="<?//= $prod['altimg'] ?>" class="form-control"/><? //} ?>

                                            </div>

                                            <div class='row'>

                                                <!--                                              --><?// $afisare = "SELECT * FROM `img` WHERE `id_prod`='" . $prod[id] . "' && `nume`!='' ORDER BY `id` asc";
                                              //                                              foreach($pdo->query($afisare) as $row){ ?>

                                                <div class='col-sm-6'>

                                                    <div class='mb-2'>

                                                        <img src="http:www.westbuy.ro/<?//= $ladr ?>files/products/<?//= $row[nume] ?>" width="200"
                                                        /><br/> <label> <a href="edit_products.php?id=<?//= $_GET['id'] ?>&idimg=<?//= $row[id] ?>&img=<?//= $row[nume] ?>&stergeimg=ok" title='Sterge' onclick='return cfsterg()' class='link1'>Sterge</a> </label> <br clear='all'>

                                                        <div class='input-group input-group-lg' style='width:100%;margin-bottom:15px;'>

                                                            <span class='input-group-text' style='width: 220px !important;'>Imagine secundara</span>

                                                            <input type="file" name="img<?//= $row['id'] ?>" class="form-control"/>

                                                            <!--                                                          --><?// if($classsetari->setari['template'] != 'westbuy'){ ?>

                                                            <span class='input-group-text' style='width: 100px;'>Tag 'ALT'</span>

                                                            <input type="text" name="imgtext<?//= $row['id'] ?>" value="<?//= $row['textimg'] ?>" class="form-control"/><? //} ?>

                                                            <input type="hidden" name="existenta" value="da"/>

                                                        </div>

                                                    </div>

                                                </div>

                                              <? //} ?></div>

                                            <HR>

                                            <div class='row'>

                                                <!--                                              --><?// for($i = 1; $i <= 20; $i++){ ?>

                                                <div class='col-sm-6'>

                                                    <div class='mb-2'>

                                                        <div class="input-group input-group-lg" style="width:100%;margin-bottom:15px;" id="hider<?//= $i ?>">

                                                            <span class='input-group-text' style='width: 220px !important;'>Imagine secundara</span>

                                                            <input type="file" name="img<?//= $i ?>" class="form-control"/>

                                                            <!--                                                          --><?// if($classsetari->setari['template'] != 'westbuy'){ ?>

                                                            <span class='input-group-text' style='width: 100px;'>Tagul 'ALT'</span>

                                                            <input type="text" name="imgtext<?//= $i ?>" class="form-control"/><? //} ?>

                                                        </div>

                                                    </div>
                                                </div><? //} ?></div>

                                            <div class="col-md-12">

                                                <button type="submit" class="btn btn-success-gradien btn-lg" name="editx" id="submit">

                                                    <i class='fa fa-check text-white'></i> &nbsp;Modifica

                                                </button>

                                            </div>

                                        </div>

                                    </form>

                                    </p></div>

                                <div class="tab-pane fade" id="pills-iconcontact" role="tabpanel" aria-labelledby="pills-iconcontact-tab">

                                    <p class='mb-0 m-t-30'>

                                    <form method='post' action='' onSubmit='return validare(this)' enctype='multipart/form-data' name='contactform' id='contactform'>

                                        <input type='hidden' name='id_lang' value="<?//= $_SESSION[id_lang] ?>"/> <input type='hidden' name='video' value='da'/> <input type='hidden' name='id' value="<?//= $_GET['id'] ?>"/>

                                        <div class='admin-follow'>

                                            <label> <strong style='color:#000; float:left; font-size:16px;'>Youtube (URL Youtube. Ex.: <img src="assets/youtube.png"/> )</strong><br> </label>

                                            <!--                                          --><?// $nrv = $classquery->nr('video', "id_prod='" . $prod[id] . "'");
                                          //                                          $sql = "SELECT * FROM `video` WHERE id_prod='" . $prod[id] . "' ORDER BY id asc";
                                          //                                          foreach($pdo->query($sql) as $row){
                                          //                                          ?>

                                            <div class="input-group input-group-lg" style="width:100%;margin-bottom:15px;">

                                                <input type="text" name="vid<?//= $row['id'] ?>" value="<?//= $row['nume'] ?>" class="form-control" style="margin-bottom: 5px;"/> <input type="text" name="vi<?//= $row['id'] ?>" value="<?//= $row['url'] ?>" class="form-control"/> <a href="edit_products.php?stergevideo=<?//= $row['id'] ?>&id=<?//= $_GET['id'] ?>" style="margin-bottom: 25px; margin-top: 5px; float: left;" class="btn btn-danger mini ">Sterge videoclip</a>

                                            </div><? //} ?>

                                            <div class='row'>

                                                <!--                                              --><?// for($i = 1; $i <= 10; $i++){ ?>

                                                <div class='col-sm-6'>

                                                    <div class='mb-2'>

                                                        <div class="input-group input-group-lg" style="width:100%;margin-bottom:15px;">







                                                <span class='input-group-text' style='width: 200px !important;



'
                                                >Denumire</span> <input type="text" name="vd<?//= $i ?>" class="form-control" placeholder="Denumire videoclip"/>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class='col-sm-6'>

                                                    <div class='mb-2'>

                                                        <div class='input-group input-group-lg' style='width:100%;margin-bottom:15px;'>



                                                <span class='input-group-text' style='width: 200px !important;'>URL



                                                    Youtube



                                                </span> <input type="text" name="v<?//= $i ?>" class="form-control" placeholder="URL Youtube"/>

                                                        </div>

                                                    </div>

                                                </div>

                                                <HR><? //} ?>

                                            </div>

                                            <div class="col-md-12">

                                                <button type="submit" class="btn btn-success-gradien btn-lg" name="editx" id="submit">Transmite</button>

                                            </div>

                                        </div>

                                    </form>

                                    </p>

                                </div>

                                <div class="tab-pane fade" id="pills-icontaburi" role="tabpanel" aria-labelledby="pills-icontaburi-tab">

                                    <p class='mb-0 m-t-30'>

                                    <form method='post' action='' onSubmit='return validare(this)' enctype='multipart/form-data' name='contactform' id='contactform'>

                                        <input type='hidden' name='id_lang' value="<?//= $_SESSION[id_lang] ?>"/> <input type='hidden' name='tab' value='da'/> <input type='hidden' name='id' value="<?//= $_GET['id'] ?>"/>

                                        <div class='admin-follow'>

                                            <!--                                          --><?// if($classsetari->setari['template'] == 'westbuy'){ ?>

                                            <div class="input-group input-group-lg" style="width:100%;margin-bottom:15px;">



                                                    <span class='input-group-text' style='width: 250px !important;



'
                                                    >Specificatii tehnnice</span> <textarea name="tehnice" id="editor3"><?//= stripcslashes($prod['tehnice']) ?></textarea>

                                                <script>CKEDITOR.replace('tehnice');</script>

                                            </div>

                                            <div class="input-group input-group-lg" style="width:100%;margin-bottom:15px;">

                                                <span class='input-group-text' style='width: 250px !important;'>Pachetul contine</span> <textarea name="pachet" id="editor4"><?//= stripcslashes($prod['pachet']) ?></textarea>

                                                <script>CKEDITOR.replace('pachet');</script>

                                            </div>

                                            <div class="input-group input-group-lg" style="width:100%;margin-bottom:15px;">

                                                <span class='input-group-text' style='width: 250px !important;'>Accesorii optionale</span> <textarea name="optiuni" id="editor5"><?//= stripcslashes($prod['optiuni']) ?></textarea>

                                                <script>CKEDITOR.replace('optiuni');</script>

                                            </div><? //} ?>















                                        <!--                                          --><?// $afisaretabs = "SELECT * FROM tabs WHERE idc LIKE '%" . $prod['idc'] . "%' && id_lang='" . $_SESSION['id_lang'] . "' ORDER BY poz ASC";
                                          //                                          foreach($pdo->query($afisaretabs) as $rtab){
                                          //                                          $tab = $pdo->query("SELECT * FROM tabs_detalii WHERE id_prod='" . $_GET['id'] . "' && id_tab='" . $rtab['id'] . "'")->fetch(); ?>

                                            <div class="input-group input-group-lg" style="width:100%;margin-bottom:15px;">

                                                <strong style="color:#000; float:left;"><?//= $rtab['nume'] ?> </strong><br> <textarea name="t<?//= $rtab['id'] ?>" id="editor4"><?//= stripcslashes($tab['text']) ?></textarea>

                                                <script>CKEDITOR.replace('t<?//=$rtab['id']?>');</script>

                                            </div>

                                          <? //} ?>

                                            <div class="col-md-12">

                                                <button type="submit" class="btn btn-success-gradien btn-lg" name="editx" id="submit">

                                                    <i class='fa fa-check text-white'></i> &nbsp;Modifica

                                                </button>

                                            </div>

                                        </div>

                                    </form>

                                    </p>

                                </div>

                                <div class="tab-pane fade" id="pills-iconspecific" role="tabpanel" aria-labelledby="pills-iconspecific-tab">

                                    <p class="mb-0 m-t-30">

                                    <div class="notification">

                                        <div role="alert" class="alert alert-info">

                                            <strong>Duplicare specificatii tehnice pentru produs: </strong>

                                            <form method="post">

                                                <input type="hidden" name="idduplicare" value="<?//= $_GET['id'] ?>"/>

                                                <div style="float: left; width: 120px;">

                                                    <input type="text" name="idprodus" placeholder="ID produs" class="form-control" style="width: 100px;"/>

                                                </div>

                                                <div style="float: left; width: 120px;">

                                                    <button type="submit" class="btn btn-success mini " name="editx" id="submit" style="height: 34px;">&nbsp;&nbsp;&nbsp;Duplicare&nbsp;&nbsp;&nbsp;</button>

                                                </div>

                                            </form>

                                            <br><br>

                                        </div>

                                    </div>

                                    <div class="admin-follow" style="padding-top: 3px;;">

                                        <div class="input-group input-group-lg" style="width:100%;margin-bottom:15px;">

                                            <strong style="color:#000; float:left;">Specificatii tehnice</strong><br>

                                            <iframe width="100%" height="1000" src="ajax.php?id_prod=<?//= $_GET['id'] ?>&id_tab=9<? //=$rtab['id']
                                            ?>&id_lang=<?//= $_SESSION['id_lang'] ?>" frameborder="0" allowfullscreen
                                            ></iframe>

                                        </div>

                                    </div>

                                    </p></div>

                                <div class="tab-pane fade" id="pills-iconfiltre" role="tabpanel" aria-labelledby="pills-iconfiltre-tab">

                                    <p class="mb-0 m-t-30">

                                    <div class="admin-follow" style="padding-top: 3px;">

                                        <div class="input-group input-group-lg" style="width:100%;margin-bottom:15px;">

                                            <iframe width="100%" height="1000" src="ajax_filtre.php?id_prod=<?//= $_GET['id'] ?>id_lang=<?//= $_SESSION['id_lang'] ?>" frameborder="0" allowfullscreen></iframe>

                                        </div>

                                    </div>

                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div></div>

@endsection
@section('jsdif')
{{--    <script src="{{ asset('assets/js/product-tab.js') }}"></script>--}}
    <script src="{{ asset('assets/js/bootstrap/bootstrap.bundle.min.js') }}" ></script>
@endsection
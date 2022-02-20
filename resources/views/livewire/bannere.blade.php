<div>
    <div class="col-sm-12">

        <div class="card">

            <div class="container-fluid product-wrapper">

                <div class="product-grid">

                    <div class="feature-products">

                        <div class="row">

                            <div class="col-md-6 products-total">

                                <div class="square-product-setting d-inline-block">

                                    <a class="icon-grid grid-layout-view" href="#" data-original-title="" title=""><i data-feather="grid"></i></a>

                                </div>

                                <div class="square-product-setting d-inline-block">

                                    <a class="icon-grid m-0 list-layout-view" href="#" data-original-title="" title=""><i data-feather="list"></i></a>

                                </div>

                                <span class="d-none-productlist filter-toggle"> Filters<span class="ms-2"><i class="toggle-data" data-feather="chevron-down"></i></span></span>

                                <div class="grid-options d-inline-block">

                                    <ul>

                                        <li>

                                            <a class="product-2-layout-view" href="#" data-original-title="" title=""><span class="line-grid line-grid-1 bg-primary"></span><span class="line-grid line-grid-2 bg-primary"></span></a>

                                        </li>

                                        <li>

                                            <a class="product-3-layout-view" href="#" data-original-title="" title=""><span class="line-grid line-grid-3 bg-primary"></span><span class="line-grid line-grid-4 bg-primary"></span><span class="line-grid line-grid-5 bg-primary"></span></a>

                                        </li>

                                        <li>

                                            <a class="product-4-layout-view" href="#" data-original-title="" title=""><span class="line-grid line-grid-6 bg-primary"></span><span class="line-grid line-grid-7 bg-primary"></span><span class="line-grid line-grid-8 bg-primary"></span><span class="line-grid line-grid-9 bg-primary"></span></a>

                                        </li>

                                    </ul>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="product-wrapper-grid">

                        <div class="row">
                            @foreach ($bannere as $banner)
                                <div class="col-xl-3 col-sm-6 xl-4">

                                    <div class="card">

                                        <div class="product-box ">

                                            <div class="product-img">

                                                <img class="img-fluid wow BounceInDown" src="https://www.westbuy.ro/files/banner/{{ $banner->img }}" >

                                                <div class="product-hover">

                                                    <ul>

                                                        <li>

                                                            <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" >

                                                                <i class="icofont icofont-pencil-alt-5"></i>

                                                            </button>

                                                        </li>

                                                        <li>

                                                            <form action="" method="get">

                                                                <button class="btn" type="submit" name="delid" value="">

                                                                    <i class="icofont icofont icofont-ui-delete"></i>

                                                                </button>

                                                            </form>

                                                        </li>

                                                    </ul>

                                                </div>

                                            </div>

                                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">

                                                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">

                                                    <div class="modal-content">

                                                        <div class="modal-header">

                                                            <div class="product-box row">

                                                                <div class="product-img col-lg-6">

                                                                    <img class="img-fluid" src="http://www.westbuy.ro/files/banner/{{ $banner->img }}" alt="{{$banner->name}}">

                                                                </div>

                                                                <div class="product-details col-lg-6 text-start">

                                                                    <div class="product-qnty">

                                                                        <fieldset>

                                                                            <div class="input-group">

                                                                                <input class="touchspin text-center" type="text" value="5">

                                                                            </div>

                                                                        </fieldset>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="product-details">

                                                <div class="row">

                                                    <div class="col-sm-6">

                                                        <div class="mb-2">

                                                            <label>Status:</label><br>

                                                            <form>

                                                                <input type='hidden' name='id' value='{{ $banner->id }}'>

                                                                <select name="activ" class="form-select form-control-success" style="width: 100px; " >

                                                                    <option value="yes"
                                                                            @if ( $banner->activ  === 'yes' ) selected="selected"  @endif
                                                                    > Activ
                                                                    </option>

                                                                    <option value="no"
                                                                            @if ( $banner->activ  === 'no' ) selected="selected"  @endif
                                                                    >Inactiv
                                                                    </option>

                                                                </select>

                                                            </form>

                                                        </div>

                                                    </div>

                                                    <div class="col-sm-6">

                                                        <div class="mb-2" style="float:right;">

                                                            <label>Pozitie:</label><br>

                                                            <select name="poz" class="form-select form-control-primary" style="float: left;">
                                                                @for ($i = 0; $i < 20; $i++)
                                                                    <option value="{{ $i }}"
                                                                            @if ( $banner->poz  === $i ) selected="selected"  @endif
                                                                    >
                                                                        {{ $i }}
                                                                    </option>
                                                                @endfor

                                                            </select>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            @endforeach

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
</div>
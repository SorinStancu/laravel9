@extends('layout.master')

@section('cssdif')
 <link rel='preload' data-preload='1' data-minified='1' as='style' onload='this.rel="stylesheet"'
         type="text/css" href="{{ asset('assets/css/vendors/jsgrid.css') }}">
 <style>
  .table-hover tbody tr:hover td, .table-hover tbody tr:hover th {
   background-color: #E8F4FE;
  }
 </style>
@endsection

@section('cssdifno')
 <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/jsgrid.css') }}">
@endsection

@section('content')
<div class="container-fluid">
 <div class='row'>
  <div class="col-md-12 project-list wow BounceInUp">

   <div class="card">

    <div class="row">

     <div class="col-md-6 ">

      <h5>
       <div class="nav-right col-6 pull-right right-header p-0" style="float:left;



                                width:50px;">

        <ul class="nav-menus">

         <li class="language-nav">

          <div class="translate_wrapper">

           <div class="lang">

            <i class="flag-icon flag-icon-ro"></i>

           </div>

          </div>

         </li>

        </ul>

       </div>

       Categorii produse

      </h5>

      <ul class="nav nav-tabs border-tab">

       <li class="nav-item" style="margin-top:7px;">

        Nr. categorii: 22
        <strong>|</strong> Nr. sub-categorii: 69
        <strong>|</strong> Nr. sub-sub-categorii: 110
       </li>

      </ul>

     </div>

     <div class="col-md-6">

      <div class="form-group mb-0 me-0"></div>

      <button class="btn btn-primary-gradien " onclick="jQuery('#add').toggle(700)" data-bs-original-title="Apasa butonul pentru a adauga o categorie" title="">

       <i class="icofont icofont-plus"></i> Adauga

      </button>

     </div>

    </div>

   </div>

  </div>

 </div>

</div>

<div id="basicScenario" class="jsgrid" style="position: relative; height: auto; width: 100%;">

 <div class="jsgrid-grid-header jsgrid-header-scrollbar">

  <div class="col-md-12">

   <table class='table table-bordered table-striped table-hover ' >

    <tr class="jsgrid-header-row">

     <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable" align="center" width="50">

      Nr.

     </th>

     <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable" align="center" width="50">

      ID

     </th>

     <!--<th align="center" >Sigla</th>-->

     <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable" align="center">

      Denumire

     </th>

     <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable" align="center">Link

     </th>

     <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable" align="center" width="100">

      Pozitie

     </th>

     <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable" align="center" width="100">

      Optiuni

     </th>

    </tr>

    </thead>

    @foreach($categorii as $categorie)

     <tr class="@if ($loop->index % 2)jsgrid-alt-row @else jsgrid-row @endif wow bounceInDown">

      <td class="jsgrid-cell jsgrid-align-center" align="center" width="50">{{ $loop->index+1 }}</td>

      <td class="jsgrid-cell jsgrid-align-center" align="center" width="50">{{ $categorie->id }}</td>

      <td class="jsgrid-cell jsgrid-align-center" align="center">{{ $categorie->name }}</td>

      <td class="jsgrid-cell jsgrid-align-center" align="center">{{ $categorie->link }}</td>

      <td class="jsgrid-cell jsgrid-align-center" align="center" width="100">

       <select name="poz" class='form-select form-control-primary'  >
        @for ($i = 0; $i < 20; $i++)
         <option value="{{ $i }}"
                 @if ( $categorie->poz  === $i ) selected="selected"  @endif
         >
          {{ $i }}
         </option>
        @endfor

       </select>

      </td>

      <td class="jsgrid-cell jsgrid-align-center" align="center" width="100">

       <form method="get" action="" style="float: left; margin-left: 10px;">

        <input type="hidden" name="edit" value="ok">

        <button class="jsgrid-button jsgrid-edit-button" type="submit" name="id" value="<?//= $r['id'] ?>"></button>

       </form>

       <form method="get" action="" style="float: left; margin-left: 10px;">

        <input type='hidden' name='sterge' value='ok'>

        <input type='hidden' name='poza' value='<?//= $r['img'] ?>'>

        <button class="jsgrid-button jsgrid-button"value="<?//= $row['id'] ?>" ></button>

       </form>

      </td>

     </tr>

  @foreach ($categorie->subcategorii as $scategorie )

    <tr class="@if ($loop->index % 2)jsgrid-alt-row @else jsgrid-row @endif wow bounceInDown">

     <td class="jsgrid-cell jsgrid-align-center" align="center" width="50">{{ $loop->index+1 }}</td>

     <td class="jsgrid-cell jsgrid-align-center" align="center" width="50">{{ $scategorie->id }}</td>

     <td class="jsgrid-cell jsgrid-align-center" align="center">{{ $scategorie->name }}</td>

     <td class="jsgrid-cell jsgrid-align-center" align="center">{{ $scategorie->link }}</td>

     <td class="jsgrid-cell jsgrid-align-center" align="center" width="100">

      <select name="poz" class='form-select form-control-primary'  >
       @for ($i = 0; $i < 20; $i++)
        <option value="{{ $i }}"
        @if ( $categorie->poz  === $i ) selected="selected"  @endif
                >
        {{ $i }}
        </option>
       @endfor

      </select>

     </td>

     <td class="jsgrid-cell jsgrid-align-center" align="center" width="100">

      <form method="get" action="" style="float: left; margin-left: 10px;">

       <input type="hidden" name="edit" value="ok">

       <button class="jsgrid-button jsgrid-edit-button" type="submit" name="id" value="<?//= $r['id'] ?>"></button>

      </form>

      <form method="get" action="" style="float: left; margin-left: 10px;">

       <input type='hidden' name='sterge' value='ok'>

       <input type='hidden' name='poza' value='<?//= $r['img'] ?>'>

       <button class="jsgrid-button jsgrid-button"value="<?//= $row['id'] ?>" ></button>

      </form>

     </td>

    </tr>

      @foreach ($scategorie->subcategorii as $sscategorie )

       <tr class="@if ($loop->index % 2)jsgrid-alt-row @else jsgrid-row @endif wow bounceInDown">

        <td class="jsgrid-cell jsgrid-align-center" align="center" width="50">{{ $loop->index+1 }}</td>

        <td class="jsgrid-cell jsgrid-align-center" align="center" width="50">{{ $scategorie->id }}</td>

        <td class="jsgrid-cell jsgrid-align-center" align="center">{{ $sscategorie->name }}</td>

        <td class="jsgrid-cell jsgrid-align-center" align="center">{{ $scategorie->link }}</td>

        <td class="jsgrid-cell jsgrid-align-center" align="center" width="100">

         <select name="poz" class='form-select form-control-primary'  >
          @for ($i = 0; $i < 20; $i++)
           <option value="{{ $i }}"
                   @if ( $categorie->poz  === $i ) selected="selected"  @endif
           >
            {{ $i }}
           </option>
          @endfor

         </select>

        </td>

        <td class="jsgrid-cell jsgrid-align-center" align="center" width="100">

         <form method="get" action="" style="float: left; margin-left: 10px;">

          <input type="hidden" name="edit" value="ok">

          <button class="jsgrid-button jsgrid-edit-button" type="submit" name="id" value="<?//= $r['id'] ?>"></button>

         </form>

         <form method="get" action="" style="float: left; margin-left: 10px;">

          <input type='hidden' name='sterge' value='ok'>

          <input type='hidden' name='poza' value='<?//= $r['img'] ?>'>

          <button class="jsgrid-button jsgrid-button"value="<?//= $row['id'] ?>" ></button>

         </form>

        </td>

       </tr>

    @endforeach
    @endforeach
    @endforeach

      </table>

 </div>
</div>
</div>

</div>
@endsection
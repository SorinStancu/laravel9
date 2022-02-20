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
        <div class="row">
                <div id="basicScenario" class="jsgrid" style="position: relative; height: auto; width: 100%;">
                    <div class="jsgrid-grid-header jsgrid-header-scrollbar">

                        <table class='table table-bordered table-striped table-hover '>

                            <tr class="jsgrid-header-row">

                                <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable" style="width: 30px;">Nr.</th>

                                <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable" style="width: 120px;">Nume</th>

                                <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable" style="width: 75px;">Telefon</th>

                                <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable" style="width: 75px;">Plata</th>

                                <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable" style="width: 50px;">Localitate</th>

                                <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable" style="width: 50px;">Suma</th>

                                <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable" style="width: 50px;">Status</th>

                                <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable" style="width: 50px;">Data</th>

                                <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable" style="width: 50px;">Nr. Com.</th>

                                <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable" style="width: 50px;">Livrare</th>

                                <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable" style="width: 50px;">Factura</th>

                            </tr>

                            @foreach ($order as $comanda => $order)

                            <tr class="jsgrid-cell wow bounceInDown">
                                <td colspan="11" style="background-color: #e5e5e5; padding: 15px;">
                                  {{ date('d-m-Y', strtotime($comanda)) }}
                                </td>
                            </tr>

                                 @foreach ($order as $comanda)

                            <tr class="@if ($loop->index % 2)jsgrid-alt-row @else jsgrid-row @endif  wow bounceInDown">

                                <td class="jsgrid-cell jsgrid-align-center">{{ $loop->index+1 }}</td>

                                <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">

                                    <button data-bs-target="#nume{{ $comanda->id }}" type="button" data-bs-toggle="modal" data-bs-original-title="" title="Vezi detalii comanda" style="padding: 10px;color:#D18AFC; border: none;  ">
                                        <i class="fa fa-user"></i>
{{--                                            {{ ucwords(strtolower($comanda->users['nume'])) }}--}}
                                    </button>
                                    <div class="modal fade" id="nume{{ $comanda->id }}" tabindex="-1" aria-labelledby="nume" style="display: none;" aria-hidden="true">

                                        <div class="modal-dialog modal-dialog-centered" role="document">

                                            <div class="modal-content">

                                                <div class="modal-header">

                                                    <h5 class="modal-title">Nume: {{--{{ $comanda->users['nume'] }}--}}</h5>

                                                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title=""></button>

                                                </div>

                                                <div class="modal-body" align="left">

                                                    <p>Telefon: {{--{{ $comanda->users['tel'] }}--}}</p>

                                                    <p>Email: {{--{{ $comanda->users['mail'] }}--}}</p>

                                                    <p>Data inregistrare: <? //= $classdata->schimba_data($user['data']) ?></p>

                                                    <HR>

                                                    <h5 class="modal-title">Comenzi anterioare</h5>


                                                </div>

                                                <div class="modal-footer">

                                                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal" data-bs-original-title="" title="">Close</button>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </td>

                                <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">
<span style='-webkit-user-select: all; -moz-user-select: all;  -ms-user-select:user-select: all;'> {{--{{ $comanda->users['tel'] }}--}}</span>
                                </td>

                                <td class="jsgrid-cell jsgrid-align-center" style="width: 75px;">
                                    @foreach ($comanda->factura as $factura)
                                        {{ $factura->plata }}
                                    @endforeach

                                </td>

                                <td class="jsgrid-cell jsgrid-align-center" style="width: 75px;">
                                    @foreach ($comanda->adresa as $adresa)
                                        {{ $adresa->loc }}
                                    @endforeach

                                </td>

                                <td class="jsgrid-cell jsgrid-align-center" style="width: 50px;">
                                  {{ $comanda->suma }}
                                    <font color="#ccc">lei</font>
                                </td>

                                <td class="jsgrid-cell jsgrid-align-center" style="width: 80px;">
                                    <select name="id_stare" class="form-select form-control-primary" style="width:170px; padding-top:5px;
{{--                                      @if ( $comanda->status['id'] === '12' )   color:'#098C28';--}}
{{--                                    @elseif ( $comanda->status['id'] === '11' )   color:'red';--}}
{{--                                    @elseif ( $comanda->status['id'] === '5' )   color:'#000';--}}
{{--                                            @endif--}}
                                            margin-right:0px;" >
{{--                                        <option value="">{{ $comanda->status['presc'] }} ({{ $comanda->status['status'] }})</option>--}}
                                        @foreach( $statusuri as $listastatus)
                                            <option value="{{ $listastatus->id }}">{{ $listastatus->presc }} ({{ $listastatus->status }})</option>
                                        @endforeach
                                 {{-- <? $afisare = "SELECT * FROM `status` WHERE tip='com'";
                                  foreach($pdo->query($afisare) as $row){

                                  ?>

      <option value="<?= $row['id'] ?>"

                                      <? if(($r['id_stare'] == '0' || $r['id_stare'] == '5') && $row['id'] == '5'){
                                          echo 'selected';
                                      }
                                      else{

                                          if($row['id'] == $r['id_stare']){
                                              echo 'selected';
                                          }
                                      } ?>>

                                          <?= $row['presc'] . ' (' . $row['status'] . ')'; ?>

      </option>

                                  <? } ?>--}}

  </select>

</td>

<td class="jsgrid-cell jsgrid-align-center" style="width: 50px;">
  {{ date('d-m-Y', strtotime($comanda->data)) }}
    <br>
    {{ date('H:i:s', strtotime($comanda->data)) }}
</td>

<td class='jsgrid-cell jsgrid-align-center' style='width: 50px;'>{{ $comanda->id }}</td>

<td class="jsgrid-cell jsgrid-align-center" style="width: 50px;">

  <button data-bs-target="#livrare{{ $comanda->id }}" type="button" data-bs-toggle="modal" data-bs-original-title="" title="Vezi detalii comanda" style="padding: 10px;color:#D18AFC; border: none;  ">

      <i class="fa fa-automobile"></i>&nbsp; Livrare</button>

  <div class="modal fade" id="livrare{{ $comanda->id }}" tabindex="-1" aria-labelledby="livrare" style="display: none;" aria-hidden="true">

      <div class="modal-dialog modal-dialog-centered" role="document">

          <div class="modal-content">

              <div class="modal-header">

                  <h5 class="modal-title">Livrare:
                      @foreach ($comanda->adresa as $adresa)
                          {{ $adresa->livrare }}
                      @endforeach
                  </h5>

                  <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title=""></button>

              </div>

              <div class="modal-body" align="left">

                  <p>Nr.comanda: <span style='user-select: text;'><? //= $r['id'] ?></span></p>

                  <p> <?  /*if($invoice['persoana']=='fizica') echo 'Nume'; else    echo 'Firma';*/ ?>: <span style='user-select: text;'>
                      <?  /*if($invoice['persoana']=='fizica') echo $user['nume'] ; else    echo $invoice['nume_fact']; */ ?></span></p>

                  <p>Telefon: <span style='user-select: text;'><? //= $user['tel'] ?></span></p>

                  <p>Email: <span style='user-select: text;'><? //= $user['mail'] ?></span></p>
                                                         {{-- <?  if($invoice['persoana']=='juridica') {?>
                  <p>C.I.F.: <span style='user-select: text;'><?= $invoice['cui'] ?></span></p>

                  <p>Nr.Reg.Com.: <span style='user-select: text;'><?= $invoice['reg'] ?></span></p>
                                                          <? }?>--}}

                  <p>Judet: <span style='user-select: text;'><? //= $adress['judet'] ?></span></p>

                  <p>Localitate: <span style='user-select: text;'><? //= $adress['loc'] ?></span></p>

                  <p>Adresa:<span style='user-select: text;'> <? //= $adress['adresa'] ?></span></p>

                  <p>Alte informatii: <span style='user-select: text;'><? //=$adress['detalii'] ?></span></p>

              </div>

              <div class="modal-footer">

                  <button class="btn btn-secondary" type="button" data-bs-dismiss="modal" data-bs-original-title="" title="">Close</button>

              </div>

          </div>

      </div>

  </div>

</td>

<td class="jsgrid-cell jsgrid-align-center" style="width: 50px;">
  <a href="../pdf/pdf.php?Facturafx=<? //=$classsetari->setari['idprod'] . $r['id'] ?>" target="_blank"
  ><i class="fa fa-file-pdf-o"></i>&nbsp;PDF</a>

</td>
</tr>

@endforeach
@endforeach

</table>

<div class="card-body"><div class="d-flex justify-content-center">  {{ $order->paginate() }}</div></div>


</div></div></div></div>
@endsection
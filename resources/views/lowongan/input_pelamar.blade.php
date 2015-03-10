
@extends('template.template')

<!-- awal section content -->
@section('content')

            <article id="content" class="8u 12u(narrower)">
              <header class="image-wrapper first 12u(narrower)">
                <h2 class="image">Input Pelamar IT Dept</h2>  
                <a class="image pull-right button small 4(narrower)" id="sign" href="tambah_pelamar"><i class="icon-g-circle-plus"></i>Tambah</a>

              </header>
             


    
                          <br>         
                          <link media="all" type="text/css" rel="stylesheet" href="http://akbar_motor/sibengkel/public/assets/datatables/jquery.dataTables.css">


                          <script src="http://akbar_motor/sibengkel/public/assets/jquery-2.0.3.min.js"></script>

                          <script src="http://akbar_motor/sibengkel/public/assets/datatables/jquery.dataTables.js"></script>

                          <table id="xEG8BlR9" class="table table-bordered 8u 12u(narrower)">
                              <colgroup>
                                          <col class="con0" />
                                          <col class="con1" />
                                          <col class="con2" />
                                      </colgroup>
                              <thead>
                              <tr>
                                          <th align="center" valign="middle" class="head0">Nama</th>
                                          <th align="center" valign="middle" class="head1">Harga</th>
                                          <th align="center" valign="middle" class="head2">Aksi</th>
                                      </tr>
                              </thead>
                              <tbody>
                              </tbody>
                          </table>

                          <script type="text/javascript">
                              
                             jQuery(document).ready(function(){
                                  // dynamic table
                                  oTable = jQuery('#xEG8BlR9').dataTable({

                                              "sPaginationType": "full_numbers",
                                              "bProcessing": false,
                                              "sAjaxSource": "http:\/\/akbar_motor\/sibengkel\/public\/jasa\/datatables",
                                              "bServerSide": true,
                                  });
                              // custom values are available via $values array
                              });

                          </script>

                       </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </article>
           {!!HTML::script("assets/js/jquery.custombox.js")!!}
    {!!HTML::style("assets/css/jquery.custombox.css")!!}
@stop




@section('js')
<script type="text/javascript">

</script>
@stop





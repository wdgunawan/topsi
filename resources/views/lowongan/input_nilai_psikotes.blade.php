
@extends('template.template')

<!-- awal section content -->
@section('content')

            <article id="content" class="8u 12u(narrower)">
              <header class="image-wrapper first 12u(narrower)">
                <h2 class="image">Input Nilai Psikotes</h2>  
                <a class="image pull-right button small 4(narrower)" id="sign" href="#input"><i class="icon-g-circle-plus"></i>Input Nilai</a>
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



                          <!-- modal container -->

                              <div id="input" style="display: none;" class="modal-example-content">
                                <div class="modal-example-header" style="height:65px;" onclick="$.fn.custombox('close');">
                                  <h3 style="float:left;line-height:1em;">Input Nilai</h3>
                                </div>
                                <div class="modal-example-body">
                                  <div class="row">
                                <section class="12u 12u(narrower)">
                                  <form method="post" action="#">   
                                      <div class="row 50%">           
                                          <div class="2u 12u(mobile)">Nilai</div>
                                          <div class="10u 12u(mobile)">
                                              <input required name="nilai" placeholder="Nilai. Misal: 10" type="number" max="10" min="0" step="1" required/>
                                          </div>
                                      </div>
                                      <div class="row 50%">
                                        <div class="12u">
                                        <ul class="actions">
                                          <li><input type="submit" value="Simpan" /></li>
                                          <li><input type="button" class="close button" onclick="$.fn.custombox('close');" value="&times;"/></li>
                                        </ul>
                                      </div></div>
                                  </form>
                                </section>
                              </div>
                                </div>
                              </div>

                          <script type="text/javascript">
                              $('#sign').on('click', function () {
                                  $.fn.custombox( this, {
                                      effect: 'makeway',
                                      overlayOpacity : 0.7,
                                      overlayColor: '#EBB198',
                                      speed: 150
                                  });
                                  return false;
                              });
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






@extends('template.template')

<!-- awal section content -->
@section('content')
            <article id="content" class="8u 12u(narrower)">
              <header class="image-wrapper first 12u(narrower)">
                <h2 class="image">Detail</h2>  
              </header>
             

              
              <div class="row 50%">           
                  <div class="8u 12u(mobile)">
                      <p class="subtitle"><i class="icon-g-folder-open"></i>Tahap Administrasi</p>
                      <a class="pull-right button small 4(narrower) azure" id="sign" href="hasil"><i class="icon-g-group"></i> Hasil</a>
                      <a class="pull-right button small 4(narrower) mistyrose" id="sign" href="input_pelamar"><i class="icon-g-user-add"></i> Input Pelamar</a>
                      <a class="pull-right button small 4(narrower) blanchedalmond" id="bobot-adm" href="#bobot-adm-form"><i class="icon-g-cogwheels"></i> Bobot</a>
                  </div>

                  <div class="8u 12u(mobile)">
                      <p class="subtitle"><i class="icon-g-old-man"></i>Tahap Psikotes</p>
                      <a class="pull-right button small 4(narrower) azure" id="sign" href="hasil"><i class="icon-g-group"></i> Hasil</a>
                      <a class="pull-right button small 4(narrower) mistyrose" style="width:138px;" id="sign" href="input_nilai_psikotes"><i class="icon-g-pen"></i> Input Nilai</a>
                      <a class="pull-right button small 4(narrower) blanchedalmond" id="bobot-psi" href="#bobot-psi-form"><i class="icon-g-cogwheels"></i> Bobot</a>
                  </div>

                  <div class="8u 12u(mobile)">
                      <p class="subtitle"><i class="icon-g-pencil"></i>Tahap Tertulis</p>
                      <a class="pull-right button small 4(narrower) azure" id="sign" href="hasil"><i class="icon-g-group"></i> Hasil</a>
                      <a class="pull-right button small 4(narrower) mistyrose" style="width:138px;" id="sign" href="input_nilai_psikotes"><i class="icon-g-pen"></i> Input Nilai</a>
                      <a class="pull-right button small 4(narrower) blanchedalmond" id="bobot-tls" href="#bobot-tls-form"><i class="icon-g-cogwheels"></i> Bobot</a>
                  </div>

                  <div class="8u 12u(mobile)">
                      <p class="subtitle"><i class="icon-g-woman"></i>Tahap Wawancara</p>
                      <a class="pull-right button small 4(narrower) azure" id="sign" href="hasil"><i class="icon-g-group"></i> Hasil</a>
                      <a class="pull-right button small 4(narrower) mistyrose" style="width:138px;" id="sign" href="input_nilai_wawancara"><i class="icon-g-pen"></i> Input Nilai</a>
                      <a class="pull-right button small 4(narrower) blanchedalmond" id="bobot-wwcr" href="#bobot-wwcr-form"><i class="icon-g-cogwheels"></i> Bobot</a>
                  </div>
              </div>



                          <!-- modal container  Administrasi-->

                              <div id="bobot-adm-form" style="display: none;" class="modal-example-content">
                                <div class="modal-example-header" style="height:65px;" onclick="$.fn.custombox('close');">
                                  <h3 style="float:left;line-height:1em;">Bobot Administrasi</h3>
                                </div>
                                <div class="modal-example-body">
                                  <div class="row">
                                    <section class="12u 12u(narrower)">
                                      <form method="post" action="#">   
                                          <div class="row 50%">           
                                              <div class="2u 12u(mobile)">Akreditasi</div>
                                              <div class="10u 12u(mobile)">
                                                  <input name="ka1" placeholder="Akreditasi. Misal : 0.15" type="number" max="1.00" min="0.00" step="0.01" required title="Gunakan titik!"/>
                                              </div>
                                          </div>
                                           <div class="row 50%">           
                                              <div class="2u 12u(mobile)">IPK</div>
                                              <div class="10u 12u(mobile)">
                                                  <input name="ka2" placeholder="IPK. Misal : 0.89" type="number" max="1.00" min="0.00" step="0.01" required title="Gunakan titik!"/>
                                              </div>
                                          </div>
                                           <div class="row 50%">           
                                              <div class="2u 12u(mobile)">Pendidikan</div>
                                              <div class="10u 12u(mobile)">
                                                  <input name="ka3" placeholder="Pendidikan Non Ilmiah. Misal : 0.45" type="number" max="1.00" min="0.00" step="0.01" required title="Gunakan titik!"/>
                                              </div>
                                          </div>
                                           <div class="row 50%">           
                                              <div class="2u 12u(mobile)">Pengalaman Kerja</div>
                                              <div class="10u 12u(mobile)">
                                                  <input name="ka4" placeholder="Pengalaman Kerja. Misal : 0.35 " type="number" max="1.00" min="0.00" step="0.01" required title="Gunakan titik!"/>
                                              </div>
                                          </div>
                                          <div class="row 50%">
                                            <div class="12u">
                                              <ul class="actions">
                                                <li><input type="submit" class="blanchedalmond" value="Simpan" /></li>
                                                <li><input type="button" class="mistyrose close button" onclick="$.fn.custombox('close');" value="&times;"/></li>
                                              </ul>
                                            </div>
                                          </div>
                                      </form>
                                    </section>
                                  </div>
                                </div>
                              </div>

                          <!-- modal container  Psikotes-->

                              <div id="bobot-psi-form" style="display: none;" class="modal-example-content">
                                <div class="modal-example-header" style="height:65px;" onclick="$.fn.custombox('close');">
                                  <h3 style="float:left;line-height:1em;">Bobot Psikotes</h3>
                                </div>
                                <div class="modal-example-body">
                                  <div class="row">
                                    <section class="12u 12u(narrower)">
                                      <form method="post" action="#">   
                                          <div class="row 50%">           
                                              <div class="2u 12u(mobile)">Kuota</div>
                                              <div class="10u 12u(mobile)">
                                                  <input name="kuota_psi" placeholder="Kuota. Misal : 0.15" type="number" max="1.00" min="0.00" step="0.01" required title="Gunakan titik!"/>
                                              </div>
                                          </div>
                                           <div class="row 50%">           
                                              <div class="2u 12u(mobile)">Nilai Minimum</div>
                                              <div class="10u 12u(mobile)">
                                                  <input name="nilai_minimum_psi" placeholder="Nilai Minimum. Misal : 0.89" type="number" max="1.00" min="0.00" step="0.01" required title="Gunakan titik!"/>
                                              </div>
                                          </div>
                                          <div class="row 50%">
                                            <div class="12u">
                                              <ul class="actions">
                                                <li><input type="submit" class="blanchedalmond" value="Simpan" /></li>
                                                <li><input type="button" class="close button mistyrose" onclick="$.fn.custombox('close');" value="&times;"/></li>
                                              </ul>
                                            </div>
                                          </div>
                                      </form>
                                    </section>
                                  </div>
                                </div>
                              </div>

                        <!-- modal container  Tertulis-->

                              <div id="bobot-tls-form" style="display: none;" class="modal-example-content">
                                <div class="modal-example-header" style="height:65px;" onclick="$.fn.custombox('close');">
                                  <h3 style="float:left;line-height:1em;">Bobot Tertulis</h3>
                                </div>
                                <div class="modal-example-body">
                                  <div class="row">
                                    <section class="12u 12u(narrower)">
                                      <form method="post" action="#">   
                                          <div class="row 50%">           
                                              <div class="2u 12u(mobile)">Kuota</div>
                                              <div class="10u 12u(mobile)">
                                                  <input name="kuota_tls" placeholder="Kuota. Misal : 0.15" type="number" max="1.00" min="0.00" step="0.01" required title="Gunakan titik!"/>
                                              </div>
                                          </div>
                                           <div class="row 50%">           
                                              <div class="2u 12u(mobile)">Nilai Minimum</div>
                                              <div class="10u 12u(mobile)">
                                                  <input name="nilai_minimum_tls" placeholder="Nilai Minimum. Misal : 0.89" type="number" max="1.00" min="0.00" step="0.01" required title="Gunakan titik!"/>
                                              </div>
                                          </div>
                                          <div class="row 50%">
                                            <div class="12u">
                                              <ul class="actions">
                                                <li><input type="submit" class="blanchedalmond" value="Simpan" /></li>
                                                <li><input type="button" class="close button mistyrose" onclick="$.fn.custombox('close');" value="&times;"/></li>
                                              </ul>
                                            </div>
                                          </div>
                                      </form>
                                    </section>
                                  </div>
                                </div>
                              </div>


                          <!-- modal container  Wawancara-->

                              <div id="bobot-wwcr-form" style="display: none;" class="modal-example-content">
                                <div class="modal-example-header" style="height:65px;" onclick="$.fn.custombox('close');">
                                  <h3 style="float:left;line-height:1em;">Bobot Wawancara</h3>
                                </div>
                                <div class="modal-example-body">
                                  <div class="row">
                                    <section class="12u 12u(narrower)">
                                      <form method="post" action="#">   
                                          <div class="row 50%">           
                                              <div class="2u 12u(mobile)">Penampilan</div>
                                              <div class="10u 12u(mobile)">
                                                  <input name="wa1" placeholder="Penampilan. Misal : 0.15" type="number" max="1.00" min="0.00" step="0.01" required title="Gunakan titik!"/>
                                              </div>
                                          </div>
                                           <div class="row 50%">           
                                              <div class="2u 12u(mobile)">Wawasan</div>
                                              <div class="10u 12u(mobile)">
                                                  <input name="wa2" placeholder="Wawasan. Misal : 0.89" type="number" max="1.00" min="0.00" step="0.01" required title="Gunakan titik!"/>
                                              </div>
                                          </div>
                                           <div class="row 50%">           
                                              <div class="2u 12u(mobile)">Sikap</div>
                                              <div class="10u 12u(mobile)">
                                                  <input name="wa3" placeholder="Sikap. Misal : 0.45" type="number" max="1.00" min="0.00" step="0.01" required title="Gunakan titik!"/>
                                              </div>
                                          </div>
                                           <div class="row 50%">           
                                              <div class="2u 12u(mobile)">Bahasa Asing</div>
                                              <div class="10u 12u(mobile)">
                                                  <input name="wa4" placeholder="Bahasa Asing. Misal : 0.35 " type="number" max="1.00" min="0.00" step="0.01" required title="Gunakan titik!"/>
                                              </div>
                                          </div>
                                          <div class="row 50%">           
                                              <div class="2u 12u(mobile)">Nilai Psikotes</div>
                                              <div class="10u 12u(mobile)">
                                                  <input name="wa5" placeholder="Nilai Psikotes. Misal : 0.35 " type="number" max="1.00" min="0.00" step="0.01" required title="Gunakan titik!"/>
                                              </div>
                                          </div>
                                          <div class="row 50%">           
                                              <div class="2u 12u(mobile)">Nilai Wawancara</div>
                                              <div class="10u 12u(mobile)">
                                                  <input name="wa6" placeholder="Nilai Wawancara. Misal : 0.35 " type="number" max="1.00" min="0.00" step="0.01" required title="Gunakan titik!"/>
                                              </div>
                                          </div>
                                          <div class="row 50%">
                                            <div class="12u">
                                              <ul class="actions">
                                                <li><input type="submit" class="blanchedalmond" value="Simpan" /></li>
                                                <li><input type="button" class="close button mistyrose" onclick="$.fn.custombox('close');" value="&times;"/></li>
                                              </ul>
                                            </div>
                                          </div>
                                      </form>
                                    </section>
                                  </div>
                                </div>
                              </div>


                          <script type="text/javascript">
                              $('#bobot-adm').on('click', function () {
                                  $.fn.custombox( this, {
                                      effect: 'sign',
                                      overlayOpacity : 0.7,
                                      overlayColor: '#EBB198',
                                      speed: 500
                                  });
                                  return false;
                              });
                               $('#bobot-psi').on('click', function () {
                                  $.fn.custombox( this, {
                                      effect: 'sign',
                                      overlayOpacity : 0.7,
                                      overlayColor: '#EBB198',
                                      speed: 500
                                  });
                                  return false;
                              });
                                $('#bobot-tls').on('click', function () {
                                  $.fn.custombox( this, {
                                      effect: 'sign',
                                      overlayOpacity : 0.7,
                                      overlayColor: '#EBB198',
                                      speed: 500
                                  });
                                  return false;
                              });
                               $('#bobot-wwcr').on('click', function () {
                                  $.fn.custombox( this, {
                                      effect: 'sign',
                                      overlayOpacity : 0.7,
                                      overlayColor: '#EBB198',
                                      speed: 500
                                  });
                                  return false;
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





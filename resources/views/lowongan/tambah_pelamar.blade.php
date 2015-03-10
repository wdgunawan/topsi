
@extends('template.template')

<!-- awal section content -->
@section('content')
            <article id="content" class="8u 12u(narrower)">
              <header class="image-wrapper first 12u(narrower)">
                <h2 class="image">Tambah/Edit Pelamar</h2>  
              </header>
             

              
                            <div class="row 50%">           
                                <div class="8u 12u(mobile)">
                                    <form method="post" action="#">  
                                          <div class="row 50%"> 
                                              <div class="12u 12u(mobile)">          
                                                <h3 class="subtitle"></i>Data Diri</h3>
                                              </div>
                                          </div>

                                          <div class="row 50%">           
                                              <div class="2u 12u(mobile)">No Peserta</div>
                                              <div class="10u 12u(mobile)">
                                                  <input name="no_peserta" placeholder="No Peserta Misal : JRH-15303" type="text" maxlength="15" required autofocus/>
                                              </div>
                                          </div>
                                           <div class="row 50%">           
                                              <div class="2u 12u(mobile)">Nama</div>
                                              <div class="10u 12u(mobile)">
                                                  <input name="nama" placeholder="Nama. Misal : Wahyu Dwi Gunawan" type="text" maxlength="40" required autofocus/>
                                              </div>
                                          </div>
                                           <div class="row 50%">           
                                              <div class="2u 12u(mobile)">Alamat</div>
                                              <div class="10u 12u(mobile)">
                                                  <input name="alamat" placeholder="Alamat. Misal : Jl. KH Azhari No 555 Seberang Ulu II Palembang 30264" type="text" maxlength="250" required/>
                                              </div>
                                          </div>
                                           <div class="row 50%">           
                                              <div class="2u 12u(mobile)">Kontak</div>
                                              <div class="10u 12u(mobile)">
                                                  <input name="kontak" placeholder="Kontak. Misal : 08966-6806-155 " type="text" pattern="\d{3,4}[\-]\d{4}[\-]\d{2,5}" title="Gunakan angka! [3 atau 4 digit angka]-[4 digit angka]-[2 sampai 5 digit angka]" required/>
                                              </div>
                                          </div>
                                          <div class="row 50%">           
                                              <div class="2u 12u(mobile)">Tempat Lahir</div>
                                              <div class="10u 12u(mobile)">
                                                  <input name="tempat" placeholder="Tempat Lahir. Misal : Palembang" type="text" maxlength="40" required/>
                                              </div>
                                          </div>
                                          <div class="row 50%">           
                                              <div class="2u 12u(mobile)">Tanggal Lahir</div>
                                              <div class="10u 12u(mobile)">
                                                  <input name="tgl" placeholder="Tanggal Lahir. Misal : 1992-06-25" type="date" max="2000-01-01" min="1985-01-01" required/>
                                              </div>
                                          </div>



                                          <div class="row 50%"> 
                                              <div class="12u 12u(mobile)">          
                                                <h3 class="subtitle">Pendidikan Terakhir</h3>
                                              </div>
                                          </div>
                                          <div class="row 50%">           
                                              <div class="2u 12u(mobile)">Perguruan Tinggi</div>
                                              <div class="10u 12u(mobile)">
                                                  <input name="pt" placeholder="Perguruan Tinggi. Misal : Universitas Sriwijaya" type="text" maxlength="40" required/>
                                              </div>
                                          </div>
                                          <div class="row 50%">           
                                              <div class="2u 12u(mobile)">Jenjang</div>
                                              <div class="10u 12u(mobile)">
                                                  <select name="jenjang" required>
                                                      <option value="">  Jenjang  </option>
                                                      <option> Strata 2</option>
                                                      <option> Strata 1</option>
                                                      <option> Diploma 3</option>
                                                  </select>
                                              </div>
                                          </div>
                                           <div class="row 50%">           
                                              <div class="2u 12u(mobile)">Akreditasi</div>
                                              <div class="10u 12u(mobile)">
                                                  <input name="akreditasi" placeholder="Akreditasi. Misal : B" type="text" maxlength="1" required/>
                                              </div>
                                          </div>
                                           <div class="row 50%">           
                                              <div class="2u 12u(mobile)">IPK</div>
                                              <div class="10u 12u(mobile)">
                                                  <input name="ipk" placeholder="IPK. Misal : 3.20" type="number" min="0" step="0.01" max="4.00" title="Gunakan titik!" required/>
                                              </div>
                                          </div>


                                          <div class="row 50%"> 
                                              <div class="12u 12u(mobile)">          
                                                <h3 class="subtitle">Pendidikan Non Ilmiah</h3>
                                              </div>
                                          </div>
                                           <div class="row 50%">           
                                              <div class="2u 12u(mobile)">Jumlah</div>
                                              <div class="10u 12u(mobile)">
                                                  <input name="jumlah" placeholder="Jumlah Pendidikan Non Ilmiah. Misal : 2" type="number" max="10" min="0" required/>
                                              </div>
                                          </div>


                                          <div class="row 50%"> 
                                              <div class="12u 12u(mobile)">          
                                                <h3 class="subtitle">Pengalaman Kerja</h3>
                                              </div>
                                          </div>
                                           <div class="row 50%">           
                                              <div class="2u 12u(mobile)">Lama</div>
                                              <div class="10u 12u(mobile)">
                                                  <input name="pk" placeholder="Lama Pengalaman Kerja. Misal : 1" type="number" max="15" min="0" step="1" title="Dalam Tahun!" required/>
                                              </div>
                                          </div>

                                          <div class="row 50%">
                                            <div class="12u">
                                              <ul class="actions">
                                                <li><input type="submit" value="Simpan" /></li>
                                                <li><input type="reset" value="Clear form" /></li>
                                              </ul>
                                            </div>
                                          </div>
                                      </form>
                                </div>
                            </div>


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





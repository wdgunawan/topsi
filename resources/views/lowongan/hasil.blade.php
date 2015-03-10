
@extends('template.template')

<!-- awal section content -->
@section('content')

            <article id="content" class="10u 12u(narrower)">
              <header class="image-wrapper first 12u(narrower)">
                <h2 class="image">Hasil Seleksi</h2>  
                <a class="image pull-right button small 4(narrower)" href="#" onclick="window.print()"><i class="icon-g-print"></i>Cetak</a>
              </header>
     
                          <table class="default 12u 12u(mobile)">
                            <thead>
                                <th>No</th>
                                <th>No Peserta</th>
                                <th>Nama</th>
                                <th>Tanggal Lahir</th>
                            </thead>
                            <tbody>
                               @for ($i = 1; $i < 6; $i++)
                                <tr>
                                    <td> {{$i}} </td>
                                    <td> ARN - 1629{{$i}} </td>
                                    <td> Peserta {{$i}} </td>
                                    <td> 0{{$i}}-0{{$i}}-199{{$i}} </td>
                                </tr>
                            @endfor 
                            </tbody>
                          </table>

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





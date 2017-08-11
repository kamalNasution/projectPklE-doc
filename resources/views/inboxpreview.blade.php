@extends('layouts.admin')
@section('content')
<style>
body {
  background: rgb(204,204,204);
}
page {
  background: white;
  display: block;
  margin: 0 auto;
  margin-bottom: 0.5cm;
  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
}
page[size="A4"] {
  width: 21cm;
  height: 29.7cm;
  margin-top: 100px;
  margin-bottom: 100px;
  margin-right: 150px;
  margin-left: 80px;
}
page[size="A4"][layout="portrait"] {
  width: 29.7cm;
  height: 21cm;
}
page[size="A3"] {
  width: 29.7cm;
  height: 42cm;
}
page[size="A3"][layout="portrait"] {
  width: 42cm;
  height: 29.7cm;
}
page[size="A5"] {
  width: 14.8cm;
  height: 21cm;
}
page[size="A5"][layout="portrait"] {
  width: 21cm;
  height: 14.8cm;
}
@media print {
  body, page {
    margin: 10;
    box-shadow: 0;
  }
}
</style>
<!-- Main content -->
<section class="content">
  <section class="content-header">
    <h1>
      Surat
    </h1>
  </section>
  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <div class="box-body table-responsive">
          <page size="A4">
            @foreach($memorandum1 as $surat)
            <p>
              <span style="font-size: 11.0pt; font-family: 'Tahoma',sans-serif;">
                PERKEBUNAN NUSANTARA III
              </span>
            </p>
            <p style="tab-stops: center 92.15pt right 6.0in;">
              <span style="font-size: 11.0pt; font-family: 'Tahoma',sans-serif;">
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
              </span>
              <u>
                <span style="font-size: 11.0pt; font-family: 'Tahoma',sans-serif;">
                  ( PERSERO )
                </span>
              </u>
            </p>
            <p style="tab-stops: center 92.15pt right 6.0in;">
              &nbsp;
            </p>
            <p style="tab-stops: center 92.15pt right 6.0in;">
              &nbsp;
            </p>
            <p style="text-align: center; tab-stops: center 92.15pt right 6.0in;">
              <u>
                <span style="font-size: 16.0pt; font-family: 'Arial',sans-serif;">
                  MEMORANDUM
                </span>
              </u>
            </p>
            <p>
              <span style="font-size: 12.0pt; line-height: 107%; font-family: 'Arial',sans-serif;">
                &nbsp;
              </span>
            </p>
            <p>
              <span style="font-size: 12.0pt; line-height: 107%; font-family: 'Arial',sans-serif;">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </span>
              <span style="font-size: 12.0pt; line-height: 107%; font-family: 'Arial',sans-serif;">
                Kepada Yth.
                &nbsp;&nbsp; : {{$surat->kepada}}
              </span>
            </p>
            <p>
              <span style="font-size: 12.0pt; line-height: 107%; font-family: 'Arial',sans-serif;">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Dari
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp; : {{$surat->dari}}
              </span>
            </p>
            <p>
              <span style="font-size: 12.0pt; line-height: 107%; font-family: 'Arial',sans-serif;">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Nomor &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                :{{$surat->no}}
              </span>
            </p>
            <p>
              <span style="font-size: 12.0pt; line-height: 107%; font-family: 'Arial',sans-serif;">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Tanggal &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :{{$surat->tanggal}}
              </span>
            </p>
            <p>
              <span style="font-size: 12.0pt; line-height: 107%; font-family: 'Arial',sans-serif;">
                -----------------------------------------------------------------------------------
                -----------------------------------------------------------------&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </span>
            </p>
            <p>
              <span style="font-size: 12.0pt; line-height: 107%; font-family: 'Arial',sans-serif;">
                Hal : &nbsp;&nbsp; {{$surat->hal}}
              </span>
            </p>
            <p>
              <span style="font-size: 12.0pt; line-height: 107%; font-family: 'Arial',sans-serif;">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {!!$surat->isi!!}
              </span>
            </p>
            <p>
              <span style="font-size: 12.0pt; line-height: 107%; font-family: 'Arial',sans-serif;">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </span>
            </p>
            <p>
              <span style="font-size: 12.0pt; line-height: 107%; font-family: 'Arial',sans-serif;">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </span>
            </p>
            <p>
              <span style="font-size: 12.0pt; line-height: 107%; font-family: 'Arial',sans-serif;">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </span>
            </p>
            <p>
              <span style="font-size: 12.0pt; line-height: 107%; font-family: 'Arial',sans-serif;">
                &nbsp;
              </span>
            </p>
            <table>
              <tbody>
                <tr>
                  <td width="397">&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td style="vertical-align: top; background: white;" width="290">
                    <table width="100%">
                      <tbody>
                        <tr>
                          <td>
                            <h2 style="text-align: center;">
                              <span style="font-size: 12pt;">
                                <strong>
                                  <span style="font-family: 'Arial',sans-serif;">
                                    Bagian Sumber Daya Manusia
                                  </span>
                                </strong>
                              </span>
                            </h2>
                            <p style="text-align: center;">
                              <span style="font-size: 12.0pt; line-height: 107%; font-family: 'Tahoma',sans-serif;">
                                &nbsp;
                              </span>
                            </p>
                            <p style="text-align: center;">
                              <span style="font-size: 12.0pt; line-height: 107%; font-family: 'Tahoma',sans-serif;">
                                &nbsp;
                              </span>
                            </p>
                            <p style="text-align: center;">
                              &nbsp;
                            </p>
                            <p style="text-align: center;">
                              <strong>
                                <u>
                                  <span style="font-size: 12.0pt; line-height: 107%; font-family: 'Arial',sans-serif;">
                                    H
                                  </span>
                                </u>
                              </strong>
                              <strong>
                                <u>
                                  <span style="font-size: 12.0pt; line-height: 107%; font-family: 'Arial',sans-serif;">
                                    j
                                  </span>
                                </u>
                              </strong>
                              <strong>
                                <u>
                                  <span style="font-size: 12.0pt; line-height: 107%; font-family: 'Arial',sans-serif;">
                                     Ama
                                   </span>
                                 </u>
                               </strong>
                               <strong>
                                 <u>
                                   <span style="font-size: 12.0pt; line-height: 107%; font-family: 'Arial',sans-serif;">
                                     lia Nasution
                                   </span>
                                 </u>
                               </strong>
                             </p>
                            <p style="text-align: center;">
                              <span style="font-family: 'Arial',sans-serif;">
                                Kepala Bagian
                              </span>
                            </p>
                            <p style="text-align: center;">
                              <strong>
                                &nbsp;
                              </strong>
                            </p>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    &nbsp;</td>
                  </tr>
                </tbody>
              </table>
              <p><span style="font-size: 12.0pt; line-height: 107%; font-family: 'Arial',sans-serif;">&nbsp;</span></p>
              <p><span style="font-size: 12.0pt; line-height: 107%; font-family: 'Arial',sans-serif;">&nbsp;</span></p>
              <p><span style="font-size: 12.0pt; line-height: 107%; font-family: 'Arial',sans-serif;">&nbsp;</span></p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p style="margin-left: 21.3pt;"><u><span style="font-size: 10.0pt; line-height: 107%; font-family: 'Tahoma',sans-serif;">T</span></u><u><span style="font-size: 10.0pt; line-height: 107%; font-family: 'Tahoma',sans-serif;">embusan</span></u> <u><span style="font-size: 10.0pt; line-height: 107%; font-family: 'Tahoma',sans-serif;">:</span></u></p>
              <p style="margin-bottom: .0001pt; line-height: normal; tab-stops: 21.3pt;">&nbsp;</p>
            </page>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>




@stop

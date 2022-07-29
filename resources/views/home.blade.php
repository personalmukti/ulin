@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <br>
    <div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>0</h3>
                    <p>Desa</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="/desas" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>0</h3>
                    <p>Perencanaan</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>0</h3>
                    <p>Pelaksanaan</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>0</h3>
                    <p>Pelaporan</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

    </div>

    <br>
    <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable ui-sortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header ui-sortable-handle">
                <h3 class="card-title">
                  <i class="fas fa-map-marker"></i>
                  Profil Kecamatan Mekarmukti
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Kondisi Geografis</h3>
                            <p>Mekarmukti secara administratif merupakan sebuah kecamatan di Kabupaten Garut, Jawa Barat. Kecamatan Mekarmukti yang terletak di sekitar jalur selatan pulau Jawa ini akan dicanangkan sebagai ibukota Kabupaten Garut Selatan.</p>

                            <p>Kecamatan Mekarmukti mempunyai  luas  wilayah  sekitar  3.540  Ha, dengan memiliki ketinggian  antara 18-335   meter   dari   permukaan   laut  serta   memiliki batas-batas  wilayah sebagai berikut :

                                <ul>
                                    <li>Sebelah  Utara, berbatasan  dengan Kecamatan Bungbulang;</li>
                                    <li>Sebelah  Timur, berbatasan dengan Kecamatan Pakenjeng;</li>
                                    <li>Sebelah Selatan,berbatasan dengan Samudera Indonesia;</li>
                                    <li>Sebelah  Barat, berbatasan  dengan Kecamatan Bungbulang;</li>
                                </ul>
                            </p>

                            <p>Secara geografi sebagian besar wilayah Kecamatan Mekarmukti terletak di daerah tepi pantai, meliputi Desa Karangwangi, Desa Cijayana, Desa Jagabaya. Sementara, Desa yang berada Lereng atau Punggung Bukit terdiri dari Desa Mekarmukti dan Desa Mekarsari.</p>
                        </div>
                    </div>
              </div><!-- /.card-body -->
            </div>

            <div class="card">
              <div class="card-header ui-sortable-handle" style="cursor: move;">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Profil Desa [Nama Desa]
                </h3>

              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  asdsakdklasjdlkjsakdj
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->


            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable ui-sortable">

            <!-- Map card -->
            <div class="card bg-gradient-primary">
              <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
                <h3 class="card-title">
                  <i class="fas fa-map-marker-alt mr-1"></i>
                  Peta Lokasi Mekarmukti
                </h3>
                <!-- card tools -->
                <div class="card-tools">
                  <button type="button" class="btn btn-primary btn-sm daterange" title="Date range">
                    <i class="far fa-calendar-alt"></i>
                  </button>
                  <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <div class="card-body">
                <div class="col-12">
                    <div>
     <iframe width="650" height="400" frameborder="0" src="https://www.bing.com/maps/embed?h=500&w=600&cp=-7.497643361787198~107.5808848978379&lvl=15.804380661211573&typ=d&sty=h&src=SHELL&FORM=MBEDV8" scrolling="no">
     </iframe>

</div>
                </div>
              </div>
              <!-- /.card-body-->
              <div class="card-footer bg-transparent">

                <!-- /.row -->
              </div>
            </div>
            <!-- /.card -->

            <!-- /.card -->

            <!-- Calendar -->
            <div class="card bg-gradient-success">
              <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">

                <h3 class="card-title">
                  <i class="far fa-calendar-alt"></i>
                  Kalender
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"><div class="bootstrap-datetimepicker-widget usetwentyfour"><ul class="list-unstyled"><li class="show"><div class="datepicker"><div class="datepicker-days" style=""><table class="table table-sm"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Month"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Month">July 2022</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Month"></span></th></tr><tr><th class="dow">Su</th><th class="dow">Mo</th><th class="dow">Tu</th><th class="dow">We</th><th class="dow">Th</th><th class="dow">Fr</th><th class="dow">Sa</th></tr></thead><tbody><tr><td data-action="selectDay" data-day="06/26/2022" class="day old weekend">26</td><td data-action="selectDay" data-day="06/27/2022" class="day old">27</td><td data-action="selectDay" data-day="06/28/2022" class="day old">28</td><td data-action="selectDay" data-day="06/29/2022" class="day old">29</td><td data-action="selectDay" data-day="06/30/2022" class="day old">30</td><td data-action="selectDay" data-day="07/01/2022" class="day">1</td><td data-action="selectDay" data-day="07/02/2022" class="day weekend">2</td></tr><tr><td data-action="selectDay" data-day="07/03/2022" class="day weekend">3</td><td data-action="selectDay" data-day="07/04/2022" class="day">4</td><td data-action="selectDay" data-day="07/05/2022" class="day">5</td><td data-action="selectDay" data-day="07/06/2022" class="day">6</td><td data-action="selectDay" data-day="07/07/2022" class="day">7</td><td data-action="selectDay" data-day="07/08/2022" class="day">8</td><td data-action="selectDay" data-day="07/09/2022" class="day weekend">9</td></tr><tr><td data-action="selectDay" data-day="07/10/2022" class="day weekend">10</td><td data-action="selectDay" data-day="07/11/2022" class="day">11</td><td data-action="selectDay" data-day="07/12/2022" class="day">12</td><td data-action="selectDay" data-day="07/13/2022" class="day">13</td><td data-action="selectDay" data-day="07/14/2022" class="day">14</td><td data-action="selectDay" data-day="07/15/2022" class="day">15</td><td data-action="selectDay" data-day="07/16/2022" class="day weekend">16</td></tr><tr><td data-action="selectDay" data-day="07/17/2022" class="day weekend">17</td><td data-action="selectDay" data-day="07/18/2022" class="day">18</td><td data-action="selectDay" data-day="07/19/2022" class="day">19</td><td data-action="selectDay" data-day="07/20/2022" class="day">20</td><td data-action="selectDay" data-day="07/21/2022" class="day">21</td><td data-action="selectDay" data-day="07/22/2022" class="day">22</td><td data-action="selectDay" data-day="07/23/2022" class="day weekend">23</td></tr><tr><td data-action="selectDay" data-day="07/24/2022" class="day weekend">24</td><td data-action="selectDay" data-day="07/25/2022" class="day">25</td><td data-action="selectDay" data-day="07/26/2022" class="day">26</td><td data-action="selectDay" data-day="07/27/2022" class="day">27</td><td data-action="selectDay" data-day="07/28/2022" class="day">28</td><td data-action="selectDay" data-day="07/29/2022" class="day active today">29</td><td data-action="selectDay" data-day="07/30/2022" class="day weekend">30</td></tr><tr><td data-action="selectDay" data-day="07/31/2022" class="day weekend">31</td><td data-action="selectDay" data-day="08/01/2022" class="day new">1</td><td data-action="selectDay" data-day="08/02/2022" class="day new">2</td><td data-action="selectDay" data-day="08/03/2022" class="day new">3</td><td data-action="selectDay" data-day="08/04/2022" class="day new">4</td><td data-action="selectDay" data-day="08/05/2022" class="day new">5</td><td data-action="selectDay" data-day="08/06/2022" class="day new weekend">6</td></tr></tbody></table></div><div class="datepicker-months" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Year"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Year">2022</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Year"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectMonth" class="month">Jan</span><span data-action="selectMonth" class="month">Feb</span><span data-action="selectMonth" class="month">Mar</span><span data-action="selectMonth" class="month">Apr</span><span data-action="selectMonth" class="month">May</span><span data-action="selectMonth" class="month">Jun</span><span data-action="selectMonth" class="month active">Jul</span><span data-action="selectMonth" class="month">Aug</span><span data-action="selectMonth" class="month">Sep</span><span data-action="selectMonth" class="month">Oct</span><span data-action="selectMonth" class="month">Nov</span><span data-action="selectMonth" class="month">Dec</span></td></tr></tbody></table></div><div class="datepicker-years" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Decade"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Decade">2020-2029</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Decade"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectYear" class="year old">2019</span><span data-action="selectYear" class="year">2020</span><span data-action="selectYear" class="year">2021</span><span data-action="selectYear" class="year active">2022</span><span data-action="selectYear" class="year">2023</span><span data-action="selectYear" class="year">2024</span><span data-action="selectYear" class="year">2025</span><span data-action="selectYear" class="year">2026</span><span data-action="selectYear" class="year">2027</span><span data-action="selectYear" class="year">2028</span><span data-action="selectYear" class="year">2029</span><span data-action="selectYear" class="year old">2030</span></td></tr></tbody></table></div><div class="datepicker-decades" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Century"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5">2000-2090</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Century"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectDecade" class="decade old" data-selection="2006">1990</span><span data-action="selectDecade" class="decade" data-selection="2006">2000</span><span data-action="selectDecade" class="decade" data-selection="2016">2010</span><span data-action="selectDecade" class="decade active" data-selection="2026">2020</span><span data-action="selectDecade" class="decade" data-selection="2036">2030</span><span data-action="selectDecade" class="decade" data-selection="2046">2040</span><span data-action="selectDecade" class="decade" data-selection="2056">2050</span><span data-action="selectDecade" class="decade" data-selection="2066">2060</span><span data-action="selectDecade" class="decade" data-selection="2076">2070</span><span data-action="selectDecade" class="decade" data-selection="2086">2080</span><span data-action="selectDecade" class="decade" data-selection="2096">2090</span><span data-action="selectDecade" class="decade old" data-selection="2106">2100</span></td></tr></tbody></table></div></div></li><li class="picker-switch accordion-toggle"></li></ul></div></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>

</div>
@endsection

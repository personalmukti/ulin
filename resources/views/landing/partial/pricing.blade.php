<section class="section-lg pb-0 pricing" id="pricing">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-title">Seluruh Project Kami</h2>
        <p class="mb-50">Berikut ini adalah seluruh project yang telah kami kerjakan.</p>
      </div>
      <div class="col-lg-10 mx-auto">
        <div class="row justify-content-center">
          <!-- pricing table -->
            <div class="col-md-12 col-lg-12 mb-2 mb-lg-1">
                <div class="rounded text-center table-1">
                    <table id="table-project" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Project ID</th>
                                <th>Project Name</th>
                                <th>Project Handler</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach(\App\Models\Project::get() as $q)
                                <tr>
                                    <td>{{ $q->project_id }}</td>
                                    <td>{{ $q->project_name }}</td>
                                    <td>{{ $q->project_handler }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Project ID</th>
                                <th>Project Name</th>
                                <th>Project Handler</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  <!-- background shapes
  <img class="pricing-bg-shape-1 up-down-animation" src="assets/dtox-1.0.0/images/background-shape/seo-ball-1.png" alt="background-shape"> -->
</section>

@push('script')
    <script>
        $(document).ready(function () {
            $('#table-project').DataTable({
                responsive: true
            });
        });
    </script>
@endpush


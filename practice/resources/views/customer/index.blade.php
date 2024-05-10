
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if(session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
                @endif
                <div class="card">
                    <div class="card-header">
<h4>Import Excel Data Into Database</h4>
                    </div>
                    <div class="card-body">
                      <form action="{{ url('customer/import') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="import_file" class="form-control"/>
                        <button type="submit" class="btn btn-success">Import</button>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

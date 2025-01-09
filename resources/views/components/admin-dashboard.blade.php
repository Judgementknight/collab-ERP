<div class="container-fluid">
    <div class="mb-3">
        <h4>Admin Dashboard</h4>
    </div>
    <div class="row">
        <div class="col-12 col-md-6 d-flex">
            <div class="card flex-fill border-0">
                <div class="card-body">
                    <h4>Welcome back, admin</h4>
                    <p>Admin Dashboard</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 d-flex">
            <div class="card flex-fill border-0">
                <div class="card-body">
                    <h4>{{ $totalEarnings }}</h4>
                    <p>Total Earnings</p>
                    <div><span class="badge text-success">{{ $growthRate }}</span> Since last month</div>
                </div>
            </div>
        </div>
    </div>
    <div class="card border-0 mt-3">
        <div class="card-header">
            <h5>Basic Table</h5>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>First</th>
                        <th>Last</th>
                        <th>Handle</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user['id'] }}</td>
                        <td>{{ $user['first_name'] }}</td>
                        <td>{{ $user['last_name'] }}</td>
                        <td>{{ $user['handle'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

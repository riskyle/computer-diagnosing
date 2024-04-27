@extends('layouts.main')
@section('content')
    @include('profile.partials.header')

    <div class="card card-outline rounded-0 card-navy mt-3 bg-light ">
        <div class="wrapper rounded">
            <span class="border-top border-black "></span>

            <main class="cd__main ">
                <table id="devices" class="table table-hover table-striped table-bordered ">

                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Issues</th>
                            <th scope="col">Date of Diagnosed</th>
                            <th scope="col">Date of Resolved</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                </table>
            </main>
        </div>
    </div>



    <script>
        $(document).ready(function() {
            $('#devices').DataTable({
                processing: true,
                serverSide: true,
                ajax: "/get-devices",
                columns: [{
                        data: null,
                        render: function(data, type, full, meta) {
                            // Use meta.row to get the row index, and add 1 to start from 1
                            return meta.row + 1;
                        },
                        name: 'device_id',
                    },
                    {
                        data: "brand",
                    },
                    {
                        data: "issues",
                    },
                    {
                        data: "dateOfDiagnosed",
                    },
                    {
                        data: "dateOfResolved",
                    },
                    {
                        data: "action",
                    },
                ],
                rowCallback: function(row, data) {
                    $(row).on('click', function() {
                        const device_id = data.device_id;
                        location.href = `diagnosing-result/${device_id}`
                    })
                }
            })
        })
    </script>
@endsection

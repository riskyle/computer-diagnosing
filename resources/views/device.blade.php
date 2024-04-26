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
                            <th scope="col">Serial Number</th>
                            <th scope="col">Device Type</th>
                            <th scope="col">Brand</th>
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
                        data: "serial_number",
                    },
                    {
                        data: "device_type",
                    },
                    {
                        data: "brand",
                    },
                    {
                        data: "action",
                    },
                ],
                rowCallback: function(row, data) {
                    $(row).on('click', function() {
                        const serial_number = data.serial_number;

                        location.href = `issues/${serial_number}/?d_id=${data.device_id}`
                    })
                }
            })
        })
    </script>
@endsection

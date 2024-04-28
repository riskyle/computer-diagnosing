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
        $(document).ready(async () => {
            try {
                const response = await axios.get("/get-devices")
                let devices = response.data.devices
                $('#devices').DataTable({
                    data: devices,
                    responsive: true,
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
                            data: "symptoms",
                            render: function(data, type, row, meta) {
                                let issues = JSON.parse(data)
                                let list = ""
                                issues.map(issue => {
                                    if (issue == null) {
                                        return;
                                    }
                                    list += "-" + capitalizeWords(issue) + "<br/>"
                                })
                                return list
                            }
                        },
                        {
                            data: "created_at",
                            render: function(data, type, row, meta) {
                                return formatDate(data)
                            }
                        },
                        {
                            data: "resolved_at",
                            render: function(data, type, row, meta) {
                                return data == null ? "Unresolved" : formatDate(data)
                            }
                        },
                        {
                            data: "action",
                            render: function() {
                                return `<button class="btn btn-primary">Go to details</button>`
                            }
                        },
                    ],
                    rowCallback: function(row, data) {
                        $(row).on('click', function() {
                            const device_id = data.device_id;
                            location.href = `diagnosing-result/${device_id}`
                        })
                    }
                })
            } catch (error) {
                console.error(error)
            }
        })

        function formatDate(dateString, format) {
            const date = new Date(dateString);

            const options = {
                year: 'numeric',
                month: 'long',
                day: 'numeric',
                // hour: 'numeric',
                // minute: 'numeric',
                // second: 'numeric',
                // hour12: true
            };

            return new Intl.DateTimeFormat('en-US', options).format(date);
        }

        function capitalizeWords(str) {
            return str.replace(/\b\w/g, function(char) {
                return char.toUpperCase();
            });
        }
    </script>
@endsection

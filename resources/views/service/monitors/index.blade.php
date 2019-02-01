@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Monitors</div>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col" width="5%">#</th>
                        <th scope="col" width="5%" class="text-center">Monitor</th>
                        <th scope="col" class="text-left">Host / IP</th>
                        <th scope="col" class="text-center">Port</th>
                        <th scope="col" class="text-center">Type</th>
                        <th scope="col" class="text-center">Latency</th>
                        <th scope="col" width="12%" class="text-center">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td class="text-center">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" checked>
                                <label class="custom-control-label"></label>
                            </div>
                        </td>
                        <td>Mark</td>
                        <td class="text-center">465</td>
                        <td class="text-center">Website</td>
                        <td class="text-center">0.0001</td>
                        <td class="text-center">
                            <button type="button" class="btn btn-sm btn-secondary">View</button>
                            <button type="button" class="btn btn-sm btn-secondary">Edit</button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td class="text-center">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input">
                                <label class="custom-control-label"></label>
                            </div>
                        </td>
                        <td>Jacob</td>
                        <td class="text-center">22</td>
                        <td class="text-center">Server</td>
                        <td class="text-center">0.0001</td>
                        <td class="text-center">
                            <button type="button" class="btn btn-sm btn-secondary">View</button>
                            <button type="button" class="btn btn-sm btn-secondary">Edit</button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td class="text-center">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input">
                                <label class="custom-control-label"></label>
                            </div>
                        </td>
                        <td>Larry</td>
                        <td class="text-center">21</td>
                        <td class="text-center">FTP</td>
                        <td class="text-center">0.0001</td>
                        <td class="text-center">
                            <button type="button" class="btn btn-sm btn-secondary">View</button>
                            <button type="button" class="btn btn-sm btn-secondary">Edit</button>
                        </td>
                      </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

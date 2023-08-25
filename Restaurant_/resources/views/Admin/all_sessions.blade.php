@extends('Admin/layout')
@section('container')
<div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">All Sessions</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> Id </th>
                            <th> Admin Id </th>
                            <th> Ip Address </th>
                            <th> User Agent </th>
                            <th> last_activity</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($sessions as $session)
                          <tr>
                            <td>
                              <span class="ps-2">{{ $session->id }}</span>
                            </td>
                            <td>
                                <a href="/admin/show/">
                                  {{ $session->user_id }}
                                </a>
                              </td>
                            <td> {{ $session->ip_address }} </td>
                            <td> {{ substr($session->user_agent, 0, 50) }}{{ strlen($session->user_agent) > 50 ? '...' : '' }}</td>
                            <td> {{  date('Y-m-d H:i:s', $session->last_activity) }} </td>
                        </tr>
                        @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
@endsection()


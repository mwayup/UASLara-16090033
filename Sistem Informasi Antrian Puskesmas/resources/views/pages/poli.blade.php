@extends('templates.default')

@section('content')
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tampil Data Poli</h2>
                    <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search...">
                    
                  </div>
                </div>
              </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                   <a href="{{url('poliinput')}}"> <button>Tambah Data</button></a>

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action" style="width: 700px">
                        <thead>
                          <tr class="headings">
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">No</th>
                            <th class="column-title">Nama Poli </th>
                            <th class="column-title">Nama Dokter </th>
                            <th class="column-title no-link last" colspan="2"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr class="even pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">1</td>
                            <td class=" ">Poli Anak </td>
                            <td class=" ">Dr Anna</td>
                            <td>
                            <a href="{{ asset('poliedit')}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                            </td>

                            
                          </tr>
                          <tr class="odd pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">2</td>
                            <td class=" ">Poli Umum</td>
                            <td class=" ">Dr Ali</td>
                            <td>
                            <a href="{{ asset('poliedit')}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                            </td>
                            
                          </tr>
                          <tr class="even pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">3</td>
                            <td class=" ">Poli Gigi</td>
                            <td class=" ">Dr Slamet</td>
                            <td>
                            <a href="{{ asset('poliedit')}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                            </td>
                            
                          </tr>
                          
                        </tbody>
                      </table>
                    </div>
							
						
                  </div>
                </div>
              </div>
@stop
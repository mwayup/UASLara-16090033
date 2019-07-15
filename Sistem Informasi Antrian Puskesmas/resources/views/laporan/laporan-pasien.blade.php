@extends('templates.default')

@section('content')
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Laporan Data Pasien</h2>
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


                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">No</th>
                            <th class="column-title">ID Pasien </th>
                            <th class="column-title">Nama Pasien </th>
                            <th class="column-title">Tanggal Lahir</th>
                            <th class="column-title">Jenis Kelamin</th>
                            <th class="column-title">Alamat</th>
                            
                          </tr>
                        </thead>

                        <tbody>
                          <tr class="even pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">1</td>
                            <td class=" ">P001</td>
                            <td class=" ">Nia</i></td>
                            <td class=" ">07-12-1997</td>
                            <td class=" ">P</td>
                            <td class=" ">Mejasem</td>
                            
                            
                          </tr>
                          <tr class="odd pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">2</td>
                            <td class=" ">P002</td>
                            <td class=" ">Tia
                            </td>
                            <td class=" ">03-10-1998</td>
                            <td class=" ">P</td>
                            <td class=" ">Pemalang</td>
                           
                            
                          </tr>
                          <tr class="even pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">3</td>
                            <td class=" ">P003</td>
                            <td class=" ">Rizal
                            </td>
                            <td class=" ">24-04-1997</td>
                            <td class=" ">L</td>
                            <td class=" ">Karanganyar</td>

                            
                          </tr>
                         
                        </tbody>
                      </table>
                    </div>
              
            
                  </div>
                </div>
              </div>
@stop
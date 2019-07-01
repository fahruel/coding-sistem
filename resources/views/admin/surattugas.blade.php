@extends('layouts.app')
@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-8">
        <h2>Data Surat Tugas</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a>Tables</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>Data Surat Tugas</strong>
                </li>
            </ol>
    </div>

    <div class="col-lg-4">
        <div class="title-action">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2" onclick="addForm()"><i class="fa fa-plus">Tambah Data</i></button>
            
        </div>
    </div>

</div>


<!-- data tables -->
<!-- AWAL DARI WRAPPER CONTENT -->
<div class="wrapper wrapper-content animated fadeIn">
    <!-- AWAL ROW -->
    <div class="row">
        <!-- awal dari alert  -->
        @if(session('sukses'))
            <div class="alert alert-success col-lg-12">
            <strong>Sukses !</strong>    {{session('sukses')}}
            </div>
        @endif

        @if(session('delete'))
            <div class="alert alert-info col-lg-12">
                <strong>Sukses !</strong>   {{session('delete')}}
            </div>
        @endif

        @if(session('update'))
            <div class="alert alert-info col-lg-12">
            <strong>Sukses !</strong>    {{session('update')}}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger col-lg-12">
                <strong>Penting ! </strong> {{session('error')}}
            </div>
        @endif
        <!-- akhir dari alert -->

        <!-- AWAL DARI UKURAN KANVAS -->
        <div class="col-lg-12">
            <!-- AWAL CONTAINER TAB -->
            <div class="tabs-container">
                <ul class="nav nav-tabs" role="tablist">
                    <li>
                        <a class="nav-link active" data-toggle="tab" href="#tab-1"> Surat Keluar Internal</a>
                    </li>
                    <li>
                        <a class="nav-link" data-toggle="tab" href="#tab-2">Surat Keluar Eksternal</a>
                    </li>

                </ul>
                

                <!-- CONTENT DARI TAB  -->
                <div class="tab-content">
                <!--  PANEL TAB SURAT Keluar Internal  -->
                    <div role="tabpanel" id="tab-1" class="tab-pane active">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="ibox ">                                                
                                        <div class="ibox-content">
                                            <div class="row">
                                                <div class="col-sm-5 m-b-xs">
                                                    <select class="form-control-sm form-control input-s-sm inline">
                                                        <option value="0">Option 1</option>
                                                        <option value="1">Option 2</option>
                                                        <option value="2">Option 3</option>
                                                        <option value="3">Option 4</option>
                                                    </select>
                                                </div>

                                                <div class="col-sm-3">
                                                    <div class="input-group">
                                                        <input placeholder="Search" type="text" class="form-control form-control-sm">
                                                            <span class="input-group-append"> 
                                                            <button type="button" class="btn btn-sm btn-primary">Go!
                                                            </button> </span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="table-responsive">
                                                <table class="table table-striped" >
                                                    <thead>
                                                    <tr>
                                                        <th><center>Nomor Surat</center></th>
                                                        <th><center>Pengirim</center></th>
                                                        <th><center>Penerima</center></th>
                                                        <th><center>Prihal</center></th>
                                                        <th><center>Tgl Surat</center></th>
                                                        <th width="20%"><center>Aksi</center></th>
                                                    </tr>
                                                    </thead>
                                                <tbody>
                                                
                                                <tr >
                                                    <td><center></center></td>
                                                    <td><center></center></td>
                                                    <td><center></center></td>
                                                    <td><center></center></td>
                                                    <td><center></center></td>
                                                    <td><center>
                                                        
                                                        <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
                                                            {{csrf_field()}}
                                                            
                                                            <a href="" class="btn btn-simple btn-info btn-xs " ><i class="fa fa-file-pdf-o"></i></a> |

                                                            
                                                            <a href="" class="btn btn-simple btn-info btn-xs " ><i class="fa fa-book"></i></a>
                                                            
                
                                                            <a href="" class="btn btn-simple btn-primary btn-xs " ><i class="fa fa-edit"></i></a>

                                                            <a href="" class="btn btn-simple btn-danger btn-xs " ><i class="fa fa-trash"></i></a>

                                                           
                                                            | <button type="button" class="edit-modal btn btn-simple btn-warning btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-sign-out"></i>
                                                            </button>
                                                            
                                                        </form>
                                                    </center></td>
                                                </tr>
                                               
                                                </tbody>
                                                </table>
                                            </div>
                                            <!-- modal upload file -->
                                    
                                            <div class="modal inmodal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog ">
                                                    <div class="modal-content animated flipInY">

                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal">
                                                                <span aria-hidden="true">&times;</span>
                                                                <span class="sr-only">Close</span>
                                                            </button>
                                                            <h4 class="modal-title"></h4>
                                                                <small class="font-bold">Sistem Informasi Digitalisasi Arsip Dokumen.</small>
                                                        </div>

                                                        <div class="modal-body">
                                                            @if ($errors->any())
                                                                <div class="alert alert-danger">
                                                                    <ul>
                                                                        @foreach ($errors-> all() as $error)
                                                                            <li>{{$error}}</li>
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                            @endif

                                                            
                                                                <form role="form" method="POST" action="" enctype="multipart/form-data">
                                                                    {{csrf_field()}}  {{method_field('POST')}}
                                                                    <input type="hidden" id="id_keluar" name="id_keluar" value="" ></input>
                                                                        <div class="alert alert-success ">
                                                                            <strong>Penting!</strong> File PDF yang telah di scan
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label>File</label> 
                                                                                <input type="file" name="namafile" autofocus required>
                                                                                <span class="help-block with-errors"></span>
                                                                        </div>
                                                        

                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary" name="submit">Save changes</button>
                                                                </div>
                                                                </form>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!-- akhir dari modal upload file -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- PANEL TAB SURAT KELUAR External -->
                    <div role="tabpanel" id="tab-2" class="tab-pane">
                        <div class="panel-body">
                        <!-- laporan surat keluar External -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="ibox ">                                                
                                        <div class="ibox-content">
                                            <div class="row">

                                                <div class="col-sm-5 m-b-xs">
                                                    <select class="form-control-sm form-control input-s-sm inline">
                                                        <option value="0">Option 1</option>
                                                        <option value="1">Option 2</option>
                                                        <option value="2">Option 3</option>
                                                        <option value="3">Option 4</option>
                                                    </select>
                                                </div>

                                                <div class="col-sm-3">
                                                    <div class="input-group">
                                                        <input placeholder="Search" type="text" class="form-control form-control-sm">
                                                        <span class="input-group-append"> 
                                                        <button type="button" class="btn btn-sm btn-primary">Go!
                                                        </button> </span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <thead> 
                                                        <tr>
                                                            <th><center>Nomor Surat</center></th>
                                                            <th><center>Pengirim</center></th>
                                                            <th><center>Penerima</center></th>
                                                            <th><center>Prihal</center></th>
                                                            <th><center>Tgl Surat</center></th>
                                                            <th width="18%"><center>Aksi</center></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    
                                                    <tr >
                                                        <td><center></center></td>
                                                        <td><center></center></td>
                                                        <td><center></center></td>
                                                        <td><center></center></td>
                                                        <td><center></center></td>
                                                        <td><center>
                                                            
                                                            <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
                                                                {{csrf_field()}}
                                                                
                                                                <a href="" class="btn btn-simple btn-info btn-xs " ><i class="fa fa-file-pdf-o"></i></a> |

                                                               
                                                                <a href="" class="btn btn-simple btn-info btn-xs " ><i class="fa fa-book"></i></a>
                                                               

                                                                <a href="" class="btn btn-simple btn-primary btn-xs " ><i class="fa fa-edit"></i></a>

                                                                <a href="" class="btn btn-simple btn-danger btn-xs " ><i class="fa fa-trash"></i></a>
                                                               
                                                                | <button type="button" class="edit-modal btn btn-simple btn-warning btn-xs" data-toggle="modal" data-target="#myModal4"><i class="fa fa-sign-out"></i>
                                                                </button>
                                                                
                                                            </form>
                                                        </center></td>
                                                    </tr>
                                                   
                                                    </tbody>
                                                    </table>
                                                   
                                            </div>
                                             <!-- modal upload file -->
                                           
                                            <div class="modal inmodal" id="myModal4" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog ">
                                                    <div class="modal-content animated flipInY">

                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal">
                                                                <span aria-hidden="true">&times;</span>
                                                                <span class="sr-only">Close</span>
                                                            </button>
                                                            <h4 class="modal-title"></h4>
                                                                <small class="font-bold">Sistem Informasi Digitalisasi Arsip Dokumen.</small>
                                                        </div>

                                                        <div class="modal-body">
                                                            <!-- untuk error handling -->
                                                            @if ($errors->any())
                                                                <div class="alert alert-danger">
                                                                    <ul>
                                                                        @foreach ($errors-> all() as $error)
                                                                            <li>{{$error}}</li>
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                            @endif

                                                            
                                                            <form role="form" method="POST" action="" enctype="multipart/form-data">
                                                                    {{csrf_field()}}  {{method_field('POST')}}
                                                                <input type="hidden" id="id_keluar_ex" name="id_keluar_ex" value="" ></input>
                                                                <div class="alert alert-success ">
                                                                    <strong>Penting!</strong> File PDF yang telah di scan
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>File</label> 
                                                                        <input type="file" name="namafile" autofocus required>
                                                                            <span class="help-block with-errors"></span>
                                                                </div>

                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary" name="submit">Save changes</button>
                                                                </div>
                                                            </form>
                                                            @endif
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            <!-- akhir dari modal upload file -->
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>  <!-- AKHIR CONTENT TAB -->

                            <!-- modal tambah data Internal-->
                            <div class="modal inmodal" id="myModal2" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog ">
                                    <div class="modal-content animated flipInY">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">
                                                <span aria-hidden="true">&times;</span>
                                                <span class="sr-only">Close</span>
                                            </button>
                                            <h4 class="modal-title"></h4>
                                                <small class="font-bold">Sistem Informasi Digitalisasi Arsip Dokumen.</small>
                                        </div>

                                        <div class="modal-body">
                                            @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors-> all() as $error)
                                                        <li>{{$error}}</li>
                                                    @endforeach
                                                </ul>
                                            </div>

                                            @endif
                                            <form role="form" method="POST" action="{{ route('admin.createsuratkeluar') }}" enctype="multipart/form-data">
                                                {{csrf_field()}}  {{method_field('POST')}}

                                                <input type="hidden" id="id" name="id"></input>
                                                <div class="form-group">
                                                    <label>Periode Surat</label> 
                                                        <select class="form-control " name="id_periode" autofocus required>
                                                            <option disabled selected>Pilih Periode Surat</option>
                                                            
                                                            @foreach ($suratperiode as $periode)      
                                                            <option value="{{ $periode->id_periode }}" autofocus required>Periode {{ $periode->periode}} {{ $periode->tahun }}</option>   
                                                            @endforeach
                                                        </select>
                                                            <span class="help-block with-errors"></span>
                                                </div>

                                                <div class="form-group">
                                                    <label>Nomor Surat</label> 
                                                        <input type="text" placeholder="Nomor Surat" class="form-control" name="nomorsurat" autofocus required>
                                                            <span class="help-block with-errors"></span>
                                                </div>

                                                <div class="form-group">
                                                    <label>Pengirim</label> 
                                                        <input type="text" placeholder="Pengirim Surat" class="form-control" name="pengirim" autofocus required>
                                                            <span class="help-block with-errors"></span>
                                                </div>

                                                <div class="form-group">
                                                    <label>Penerima</label> 
                                                        <input type="text" placeholder="Penerima Surat" class="form-control" name="penerima" autofocus required>
                                                            <span class="help-block with-errors"></span>
                                                </div>

                                                <div class="form-group">
                                                    <label>Prihal</label> 
                                                        <input type="text" placeholder="Prihal Surat" class="form-control" name="prihal" autofocus required>
                                                            <span class="help-block with-errors"></span>
                                                </div>

                                                <div class="form-group">
                                                    <label>Lampiran</label> 
                                                        <input type="text" placeholder="Jumlah Lampiran Surat" class="form-control" name="lampiran" autofocus required>
                                                            <span class="help-block with-errors"></span>
                                                </div>

                                                <div class="form-group">
                                                    <label>Tgl Surat</label> 
                                                    <input type="text"  class="form-control datepicker1" name="tglsurat" autofocus required>
                                                            <span class="help-block with-errors"></span>
                                                </div>                                      
                                        

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" name="submit">Save changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- modal tambah data External-->
                            <div class="modal inmodal" id="myModal3" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog ">
                                    <div class="modal-content animated flipInY">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">
                                                <span aria-hidden="true">&times;</span>
                                                <span class="sr-only">Close</span>
                                            </button>
                                            <h4 class="modal-title"></h4>
                                                <small class="font-bold">Sistem Informasi Digitalisasi Arsip Dokumen.</small>
                                        </div>

                                        <div class="modal-body">
                                            @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors-> all() as $error)
                                                        <li>{{$error}}</li>
                                                    @endforeach
                                                </ul>
                                            </div>

                                            @endif
                                            <form role="form" method="POST" action="{{ route('admin.createsuratkeluarexternal') }}" enctype="multipart/form-data">
                                                {{csrf_field()}}  {{method_field('POST')}}

                                                <input type="hidden" id="id" name="id"></input>
                                                <div class="form-group">
                                                    <label>Periode Surat</label> 
                                                        <select class="form-control " name="id_periode" autofocus required>
                                                            <option disabled selected>Pilih Periode Surat</option>
                                                            
                                                            @foreach ($suratperiode as $periode)      
                                                            <option value="{{ $periode->id_periode }}" autofocus required>Periode {{ $periode->periode}} {{ $periode->tahun }}</option>   
                                                            @endforeach
                                                        </select>
                                                            <span class="help-block with-errors"></span>
                                                </div>

                                                <div class="form-group">
                                                    <label>Nomor Surat</label> 
                                                        <input type="text" placeholder="Nomor Surat" class="form-control" name="nomorsurat" autofocus required>
                                                            <span class="help-block with-errors"></span>
                                                </div>

                                                <div class="form-group">
                                                    <label>Pengirim</label> 
                                                        <input type="text" placeholder="Pengirim Surat" class="form-control" name="pengirim" autofocus required>
                                                            <span class="help-block with-errors"></span>
                                                </div>

                                                <div class="form-group">
                                                    <label>Penerima</label> 
                                                        <input type="text" placeholder="Penerima Surat" class="form-control" name="penerima" autofocus required>
                                                            <span class="help-block with-errors"></span>
                                                </div>

                                                <div class="form-group">
                                                    <label>Prihal</label> 
                                                        <input type="text" placeholder="Prihal Surat" class="form-control" name="prihal" autofocus required>
                                                            <span class="help-block with-errors"></span>
                                                </div>

                                                <div class="form-group">
                                                    <label>Lampiran</label> 
                                                        <input type="text" placeholder="Jumlah Lampiran Surat" class="form-control" name="lampiran" autofocus required>
                                                            <span class="help-block with-errors"></span>
                                                </div>

                                                <div class="form-group">
                                                    <label>Tgl Surat</label> 
                                                    <input type="text"  class="form-control datepicker1" name="tglsurat" autofocus required>
                                                            <span class="help-block with-errors"></span>
                                                </div>                                      
                                        

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" name="submit">Save changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>



            </div><!-- AKHIR CONTAINER TAB -->

        </div><!-- AKHIR ROW -->
        
    </div><!-- AKHIR DARI CONTENT WRAPPER -->
    
    
</div>

<script type="text/javascript">
    // $(document).on("clik", ".delete", function(e){
    //     var link = $(this).attr("href");
    //     e.preventDefault();
    //     swal({ title: "Kamu Yakin?",
    //         text: "Data Akan Dihapus!",
    //         type: "warning",
    //         showCancelButton:true,
    //         confirmButtonColor: "#DD6B55",
    //         confirmButtonClass: "btn btn-info btn-fill",
    //         confirmButtonText: "Ya",
    //         cancelButtonClass: "btn btn-danger btn-fill",
    //         confirmButtonText: "Tidak",
    //         closeOnConfirm: false,
    //     },function(){
    //         document.location.href() = link;
    //     });
    // });

    document.querySelector(".delete").addEventListener("clik", function(){
        swal({
            title: "Apa Kamu Yakin?",
            type: "info",
            showCancelButton:true,
            confirmButtonText: "Delete",
            confirmButtonColor: "#ff0055",
            cancelButtonColor: "#999999",
            reverseButton: true,
            focusConfirm:false,
            focusCancel:true
        })
    })
</script>

<script type="text/javascript">
    //date picker tgl terima
 $(function(){
  $(".datepicker").datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true,
      todayHighlight: true,
  });
 });

 //datepicker tgl surat
 $(function(){
  $(".datepicker1").datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true,
      todayHighlight: true,
  });
 });

 //modalscript
 function addForm(){
    save_method = "add";
    $('input[name=_method]').val('POST'); 
    $('#myModal2 form')[0].reset();
    $('.modal-title').text('Input Data Surat Tugas');
 }

 $ (function (){
        $ ('myModal2 form').validator().on('submit',function(e){
            if (!e.isDefaultPrevented()) {
                var id = $('#id').val();
                if (save_method == 'add') url = "{{ url('suratmasuk') }}";
                else url = "{{ url('suratmasuk'). '/' }}" + id;

                $.ajax({
                    url : url,
                    type : "POST",
                    data : $('#myModal2 form').serialize(),
                    success : function ($data){
                        $('#modal-form').modal('hide');
                    },

                    error : function(){
                        alert('Oops! Something error!');
                    }
                });
                return false;
            }   
        });
 }); 


function editForm(id){
    save_method ='edit';
     $('input[name=_method]').val('PATCH'); 
     $('#myModal2 form')[0].reset();
     $.ajax({
        url : "{{ url('suratmasuk') }}" + '/' + id + "/edit",
        type : "GET",
        dataType: "JSON",
        success : function(data){
            $('#modal-form').modal('show');
            $('.modal-title').text('Edit Data Surat Masuk');

            $('#id').val(data.id);
            $('#nomorsurat').val(data.nomorsurat);
            $('#perngirim').val(data.pengirim);
            $('#penerima').val(data.penerima);
            $('#prihal').val(data.prihal);
            $('#tglsurat').val(data.tglsurat);
            $('#tglterima').val(data.tglterima);
            $('#namafile').val(data.namafile);
        },
        error : function(){
            alert("Nothing Data");
        }
     });
}


 $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 10,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                   
                ]

            });

        });

</script>

<script type="text/javascript">
 
</script>


@endsection
@extends('layout.main')

@section('container')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0 d-flex">
                        <h6>Barang Masuk</h6>
                        <button type="button" class="btn bg-gradient-primary ms-3" data-bs-toggle="modal"
                            data-bs-target="#inputModal">Tambah Barang Masuk</button>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="inputModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Barang Masuk</h5>
                                    <button type="button" class="btn-close text-dark" data-bs-dismiss="modal"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="/iitem">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="stuff_id">Nama Barang</label>
                                            <select required class="form-select form-control selectpicker" data-live-search="true"
                                                name="stuff_id" id="stuff_id">
                                                <option value="" selected>Pilih barang</option>
                                                @foreach ($stuffs as $stuff)
                                                <option value="{{$stuff->id}}">{{$stuff->nama_barang}}</option>
                                                @endforeach
                                            </select>
                                            {{-- <input type="text" class="form-control" id="status" name="status"
                                                required> --}}
                                        </div>
                                        <div class="mb-3">
                                            <label for="jumlah">Jumlah Barang</label>
                                            <input type="text" class="form-control" id="jumlah" name="jumlah"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="tgl_masuk">Tanggal Masuk</label>
                                            <input type="date" class="form-control" id="tgl_masuk" name="tgl_masuk"
                                                required>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn bg-gradient-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn bg-gradient-primary">Save changes</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            No</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Tanggal Masuk</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Kode Barang</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nama Barang</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Jumlah</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Satuan</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Status</th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($iitems as $item)
                                    <tr>
                                        <td>
                                            <p class="text-xs text-secondary mb-0">{{$loop->iteration}}</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class=""> {{$item->tgl_masuk}} </span>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-warning"> {{$item->stuff->kd_barang}} </span>
                                        </td>
                                        <td>
                                            {{$item->stuff->nama_barang}}
                                        </td>
                                        <td class="text-center">
                                            {{$item->jumlah}}
                                        </td>
                                        <td class="text-center">
                                            {{$item->stuff->satuan}}
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="badge badge-sm bg-gradient-success"> {{$item->stuff->status}} </span>
                                        </td>
                                        <td class="align-middle">
                                            <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                                data-toggle="tooltip" data-original-title="Edit user">
                                                Edit
                                            </a>
                                        </td>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

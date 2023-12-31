@if ($dokumen->count() > 0)
    <div class="data-table-responsive-wrapper overflow-auto">
        <table class="data-table hover dataTable no-footer">
            <thead style="position: sticky;top: 0">
                <tr>
                    <th class="text-muted text-small text-uppercase text-sortable" style="position: sticky;top: 0">
                        @sortablelink('id', 'No.')</th>
                    <th class="text-muted text-small text-uppercase text-sortable" style="position: sticky;top: 0;">
                        @sortablelink('kode_klasifikasi', 'Kode Klasifikasi')</th>
                    <th class="text-muted text-small text-uppercase text-sortable" style="position: sticky;top: 0">
                        @sortablelink('uraian', 'Uraian')</th>
                    <th class="text-muted text-small text-uppercase text-sortable" style="position: sticky;top: 0">
                        @sortablelink('tanggal_validasi', 'Tanggal Validasi')</th>
                    <th class="text-muted text-small text-uppercase text-sortable" style="position: sticky;top: 0">
                        @sortablelink('jumlah_satuan_item', 'Jumlah Satuan Item')</th>
                    <th class="text-muted text-small text-uppercase text-sortable" style="position: sticky;top: 0">
                        @sortablelink('keterangan', 'Keterangan')</th>
                    <th style="width: 300px !important" class="text-muted text-small text-uppercase text-sortable">
                        @sortablelink('no_sp2d', 'No. SP2D')</th>
                    <th class="text-muted text-small text-uppercase text-sortable">@sortablelink('nominal', 'Nominal')
                    </th>
                    <th class="text-muted text-small text-uppercase text-sortable">@sortablelink('akun_jenis_id', 'Kode Akun Jenis')
                    </th>
                    <th class="text-muted text-small text-uppercase text-sortable">@sortablelink('akun_jenis_id', 'Nama Akun Jenis')
                    </th>
                    <th class="text-muted text-small text-uppercase text-sortable">@sortablelink('skpd', 'SKPD/Unit SKPD')
                    </th>
                    <th class="text-muted text-small text-uppercase text-sortable">@sortablelink('nwp', 'NWP')
                    </th>
                    <th class="text-muted text-small text-uppercase text-sortable">@sortablelink('pejabat_penandatangan', 'Pejabat Penandatangan')
                    </th>
                    <th class="text-muted text-small text-uppercase text-sortable">@sortablelink('unit_pengolah', 'Unit Pengolah')
                    </th>
                    <th class="text-muted text-small text-uppercase text-sortable">@sortablelink('kurun_waktu', 'Kurun Waktu')
                    </th>
                    <th class="text-muted text-small text-uppercase text-sortable">@sortablelink('jumlah_satuan_berkas', 'Jumlah Satuan Berkas')
                    </th>
                    <th class="text-muted text-small text-uppercase text-sortable">@sortablelink('tkt_perkemb', 'Tingkat Perkembangan')
                    </th>
                    <th class="text-muted text-small text-uppercase text-sortable">@sortablelink('no_box', 'No. Box')
                    </th>
                    <th class="text-muted text-small text-uppercase text-sortable">@sortablelink('status', 'Status')
                    </th>
                    <th width="10%" class="empty">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dokumen ?? [] as $item)
                    <tr class="cursor-pointer" data-bs-toggle="collapse" data-bs-target="#collapse{{ $item->id }}">
                        <td style="height: 42px !important" class="py-2">
                            {{ $loop->index + 1 }}.
                        </td>
                        <td style="height: 42px !important" class="py-2">
                            {{ $item->kode_klasifikasi ? $item->kode_klasifikasi : '-' }}
                        </td>
                        <td style="height: 42px !important" class="py-2">
                            {{ $item->uraian ? $item->uraian : '-' }}

                        </td>
                        <td style="height: 42px !important" class="py-2">
                            {{ $item->tanggal_validasi ? $item->tanggal_validasi : '-' }}
                        </td>
                        <td style="height: 42px !important" class="py-2">
                            {{ $item->jumlah_satuan_item ? $item->jumlah_satuan_item : '-' }}
                        </td>
                        <td style="height: 42px !important" class="py-2">
                            {{ $item->keterangan ? $item->keterangan : '-' }}
                        </td>
                        <td style="height: 42px !important;" class="py-2">
                            {{ $item->no_sp2d ? $item->no_sp2d : '-' }}
                        </td>
                        <td style="height: 42px !important" class="py-2">
                            Rp.<span class="text-white">__</span>{{ number_format($item->nominal, 0, ',', '.') }},-
                        </td>
                        <td style="height: 42px !important;" class="py-2">
                            {{ $item->akunJenis ? $item->akunJenis->kode_akun : '-' }}
                        </td>
                        <td style="height: 42px !important;" class="py-2">
                            {{ $item->akunJenis ? $item->akunJenis->nama_akun : '-' }}
                        </td>
                        <td style="height: 42px !important" class="py-2">
                            {{ $item->skpd ? $item->skpd : '-' }}
                        </td>
                        <td style="height: 42px !important" class="py-2">
                            {{ $item->nwp ? $item->nwp : '-' }}
                        </td>
                        <td style="height: 42px !important" class="py-2">
                            {{ $item->pejabat_penandatangan ? $item->pejabat_penandatangan : '-' }}
                        </td>
                        <td style="height: 42px !important" class="py-2">
                            {{ $item->unit_pengolah ? $item->unit_pengolah : '-' }}
                        </td>
                        <td style="height: 42px !important" class="py-2">
                            {{ $item->kurun_waktu ? $item->kurun_waktu : '-' }}
                        </td>
                        <td style="height: 42px !important" class="py-2">
                            {{ $item->jumlah_satuan_berkas ? $item->jumlah_satuan_berkas : '-' }}
                            Berkas
                        </td>
                        <td style="height: 42px !important" class="py-2">
                            {{ $item->tkt_perkemb ? $item->tkt_perkemb : '-' }}
                        </td>
                        <td style="height: 42px !important" class="py-2">
                            {{ $item->no_box ? $item->no_box : '-' }}
                        </td>
                        <td style="height: 42px !important" class="py-2">
                            {{ $item->status ? $item->status : '-' }}
                        </td>
                        <td style="height: 42px !important" class="py-2">
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">

                                <a href="{{ route('data-arsip.show', $item->id) }}"
                                    class="btn btn-icon btn-icon-only btn-sm btn-secondary" type="button">
                                    <i data-acorn-icon="info-circle"></i>
                                </a>

                                <button type="button" data-item="{{ $item }}"
                                    class="btn btn-icon btn-icon-only btn-sm btn-warning btn-edit-parent">
                                    <i data-acorn-icon="edit"></i>
                                </button>

                                <button type="button" data-id="{{ $item->id }}"
                                    data-subitem="{{ $item->detailDokumen[0] ?? null }}"
                                    class="btn btn-icon btn-icon-only btn-sm btn-info btn-add-parent">
                                    <i data-acorn-icon="plus"></i>
                                </button>

                                <button class="btn btn-icon btn-icon-only btn-sm btn-primary modal-verifikasi"
                                    type="button" data-id="{{ $item->id }}" data-status="Terverifikasi"
                                    data-bs-toggle="modal" data-bs-target="#modalVerifikasi">
                                    <i data-acorn-icon="check"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <tr class="collapse" id="collapse{{ $item->id }}">
                        <td class="border" colspan="20">
                            <div class="data-table-responsive-wrapper overflow-auto">
                                <table class="data-table dataTable no-footer">
                                    <tr>
                                        <td class="bg-primary text-white text-small text-uppercase">No.
                                        </td>
                                        <td class="bg-primary text-white text-small text-uppercase">
                                            Kode
                                            Klasifikasi</td>
                                        <td class="bg-primary text-white text-small text-uppercase">
                                            Uraian</td>
                                        <td class="bg-primary text-white text-small text-uppercase">
                                            Tanggal Surat
                                        </td>
                                        <td class="bg-primary text-white text-small text-uppercase">
                                            Jumlah Satuan
                                        </td>
                                        <td class="bg-primary text-white text-small text-uppercase">
                                            Keterangan
                                        </td>
                                        <td class="bg-primary text-white text-small text-uppercase">
                                            Jenis Naskah
                                            Dinas</td>
                                        <td style="widtd: 300px !important"
                                            class="bg-primary text-white text-small text-uppercase">
                                            No. Surat</td>
                                        <td class="bg-primary text-white text-small text-uppercase">
                                            Pejabat
                                            Penandatangan</td>
                                        <td class="bg-primary text-white text-small text-uppercase">
                                            Unit Pengolah
                                        </td>
                                        <td class="bg-primary text-white text-small text-uppercase">
                                            Kurun Waktu
                                        </td>
                                        <td class="bg-primary text-white text-small text-uppercase">No.
                                            Box</td>
                                        <td colspan="7" class="bg-primary text-white text-small text-uppercase">
                                            Tingkat
                                            Perkembangan</td>
                                        <td class="bg-primary empty">&nbsp;</td>
                                    </tr>
                                    @foreach ($item->detailDokumen ?? [] as $subitem)
                                        <tr class="border">

                                            <td style="height: 42px !important"
                                                class="empty py-2 border-start border-top border-bottom">
                                                {{ $loop->index + 1 }}.</td>
                                            <td style="height: 42px !important" class="py-2 border-top border-bottom">
                                                {{ $subitem->kode_klasifikasi ? $subitem->kode_klasifikasi : '-' }}
                                            </td>
                                            <td style="height: 42px !important" class="py-2 border-top border-bottom">
                                                {{ $subitem->uraian ? $subitem->uraian : '-' }}
                                            </td>
                                            <td style="height: 42px !important" class="py-2 border-top border-bottom">
                                                {{ $subitem->tanggal_surat ? $subitem->tanggal_surat : '-' }}
                                            </td>
                                            <td style="height: 42px !important" class="py-2 border-top border-bottom">
                                                {{ $subitem->jumlah_satuan ? $subitem->jumlah_satuan : '-' }}
                                            </td>
                                            <td style="height: 42px !important" class="py-2 border-top border-bottom">
                                                {{ $subitem->keterangan ? $subitem->keterangan : '-' }}
                                            </td>
                                            <td style="height: 42px !important" class="py-2 border-top border-bottom">
                                                {{ $subitem->jenis_naskah_dinas ? $subitem->jenis_naskah_dinas : '-' }}
                                            </td>
                                            <td style="height: 42px !important;"
                                                class="py-2 border-top border-bottom">
                                                {{ $subitem->no_surat ? $subitem->no_surat : '-' }}
                                            </td>
                                            <td style="height: 42px !important" class="py-2 border-top border-bottom">
                                                {{ $subitem->pejabat_penandatangan ? $subitem->pejabat_penandatangan : '-' }}
                                            </td>
                                            <td style="height: 42px !important" class="py-2 border-top border-bottom">
                                                {{ $subitem->unit_pengolah ? $subitem->unit_pengolah : '-' }}
                                            </td>
                                            <td style="height: 42px !important" class="py-2 border-top border-bottom">
                                                {{ $subitem->kurun_waktu ? $subitem->kurun_waktu : '-' }}
                                            </td>
                                            <td style="height: 42px !important" class="py-2 border-top border-bottom">
                                                {{ $subitem->no_box ? $subitem->no_box : '-' }}
                                            </td>
                                            <td colspan="7" style="height: 42px !important"
                                                class="py-2 border-top border-bottom">
                                                {{ $subitem->tkt_perk ? $subitem->tkt_perk : '-' }}
                                            </td>
                                            <td style="height: 42px !important"
                                                class="py-2 border-top border-bottom border-end">
                                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                    <button type="button" data-item="{{ $item }}"
                                                        data-subitem="{{ $subitem }}"
                                                        data-index="{{ $loop->index + 1 }}"
                                                        class="btn btn-icon btn-icon-only btn-sm btn-outline-warning btn-edit-child">
                                                        <i data-acorn-icon="edit"></i>
                                                    </button>


                                                    {{-- <form id="delete_{{ $item->id }}_{{ $subitem->id }}"
                                                                        action="/detail-data-arsip/{{ $subitem->id }}"
                                                                        method="POST" class="d-inline">
                                                                        @method('delete')
                                                                        @csrf
                                                                        <button type="button"
                                                                            class="btn btn-icon btn-icon-only btn-sm btn-outline-danger modal-hapus"
                                                                            data-id="delete_{{ $item->id }}_{{ $subitem->id }}"
                                                                            data-bs-toggle="modal" data-bs-target="#modalHapus"><i
                                                                                data-acorn-icon="bin"></i></button>
                                                                    </form> --}}

                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- Table End -->

    <div class="d-flex flex-row justify-content-center mt-5">
        {{ $dokumen->links() }}
    </div>
@else
    <div class="d-flex align-items-center justify-content-center mt-5" style="height: 60vh">
        <div class="alert alert-warning w-75 text-center" role="alert">
            Data Tidak Ditemukan
        </div>
    </div>
@endif

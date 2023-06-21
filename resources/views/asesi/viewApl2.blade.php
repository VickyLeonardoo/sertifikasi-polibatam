<div class="page-inner mt--5">
    <div class="row row-card-no-pd mt--3">
        <div class="table-responsive p-0 container-fluid" style="margin-right: 1cm; margin-left: 1cm; margin-top: 1cm">

            <table border="2" style="border-collapse: collapse;" class="display" width="100%">
                <tr>
                    <td width="60%">Unit Komptetensi</td>
                    <td colspan="3" width="40%">{{ $unit[0]->nama }}</td>
                </tr>
                <tr>
                    <td>Dapatkah Saya?</td>
                    <td style="text-align: center;">K</td>
                    <td style="text-align: center;">BK</td>
                    <td>Bukti Relevan</td>
                </tr>
                <tr>
                    <td>
                        <p style="margin-left: 20px; margin-top: 10px">Elemen Kompetensi : {{ $unit[0]->elemen[0]->name }}</p>
                    @foreach ($unit[0]->elemen[0]->pertanyaan as $item)
                    <p style="margin-left: 40px;">{{ $item->nomor }}.{{ $item->nama }}</p>
                    @endforeach
                    <br>
                    </td>
                    <td style="text-align: center; "><input type="radio"></td>
                    <td style="text-align: center;"><input type="radio"></td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <p style="margin-left: 20px; margin-top: 10px">Elemen Kompetensi : {{ $unit[0]->elemen[0]->name }}</p>
                    @foreach ($unit[0]->elemen[1]->pertanyaan as $item)
                    <p style="margin-left: 40px;">{{ $item->nomor }}.{{ $item->nama }}</p>
                    @endforeach
                    <br>
                    </td>
                    <td style="text-align: center; "><input type="radio"></td>
                    <td style="text-align: center;"><input type="radio"></td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <p style="margin-left: 20px; margin-top: 10px">Elemen Kompetensi : {{ $unit[0]->elemen[0]->name }}</p>
                    @foreach ($unit[0]->elemen[2]->pertanyaan as $item)
                    <p style="margin-left: 40px;">{{ $item->nomor }}.{{ $item->nama }}</p>
                    @endforeach
                    <br>
                    </td>
                    <td style="text-align: center; "><input type="radio"></td>
                    <td style="text-align: center;"><input type="radio"></td>
                    <td></td>
                </tr>
            </table>
            <br>
            <table border="2" style="border-collapse: collapse;" class="display" width="100%">
                <tr>
                    <td width="60%">Unit Komptetensi</td>
                    <td colspan="3" width="40%">{{ $unit[1]->nama }}</td>
                </tr>
                <tr>
                    <td>Dapatkah Saya?</td>
                    <td style="text-align: center;">K</td>
                    <td style="text-align: center;">BK</td>
                    <td>Bukti Relevan</td>
                </tr>
                <tr>
                    <td>
                        <p style="margin-left: 20px; margin-top: 10px">Elemen Kompetensi : {{ $unit[1]->elemen[0]->name }}</p>
                    @foreach ($unit[1]->elemen[0]->pertanyaan as $item)
                    <p style="margin-left: 40px;">{{ $item->nomor }}.{{ $item->nama }}</p>
                    @endforeach
                    <br>
                    </td>
                    <td style="text-align: center; "><input type="radio"></td>
                    <td style="text-align: center;"><input type="radio"></td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <p style="margin-left: 20px; margin-top: 10px">Elemen Kompetensi : {{ $unit[1]->elemen[1]->name }}</p>
                    @foreach ($unit[1]->elemen[1]->pertanyaan as $item)
                    <p style="margin-left: 40px;">{{ $item->nomor }}.{{ $item->nama }}</p>
                    @endforeach
                    <br>
                    </td>
                    <td style="text-align: center; "><input type="radio"></td>
                    <td style="text-align: center;"><input type="radio"></td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <p style="margin-left: 20px; margin-top: 10px">Elemen Kompetensi : {{ $unit[1]->elemen[2]->name }}</p>
                    @foreach ($unit[1]->elemen[2]->pertanyaan as $item)
                    <p style="margin-left: 40px;">{{ $item->nomor }}.{{ $item->nama }}</p>
                    @endforeach
                    <br>
                    </td>
                    <td style="text-align: center; "><input type="radio"></td>
                    <td style="text-align: center;"><input type="radio"></td>
                    <td></td>
                </tr>
            </table>
            <br>
            <table border="2" style="border-collapse: collapse;" class="display" width="100%">
                <tr>
                    <td width="60%">Unit Komptetensi</td>
                    <td colspan="3" width="40%">{{ $unit[2]->nama }}</td>
                </tr>
                <tr>
                    <td>Dapatkah Saya?</td>
                    <td style="text-align: center;">K</td>
                    <td style="text-align: center;">BK</td>
                    <td>Bukti Relevan</td>
                </tr>
                <tr>
                    <td>
                        <p style="margin-left: 20px; margin-top: 10px">Elemen Kompetensi : {{ $unit[2]->elemen[0]->name }}</p>
                    @foreach ($unit[2]->elemen[0]->pertanyaan as $item)
                    <p style="margin-left: 40px;">{{ $item->nomor }}.{{ $item->nama }}</p>
                    @endforeach
                    <br>
                    </td>
                    <td style="text-align: center; "><input type="radio"></td>
                    <td style="text-align: center;"><input type="radio"></td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <p style="margin-left: 20px; margin-top: 10px">Elemen Kompetensi : {{ $unit[2]->elemen[1]->name }}</p>
                    @foreach ($unit[2]->elemen[1]->pertanyaan as $item)
                    <p style="margin-left: 40px;">{{ $item->nomor }}.{{ $item->nama }}</p>
                    @endforeach
                    <br>
                    </td>
                    <td style="text-align: center; "><input type="radio"></td>
                    <td style="text-align: center;"><input type="radio"></td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <p style="margin-left: 20px; margin-top: 10px">Elemen Kompetensi : {{ $unit[2]->elemen[2]->name }}</p>
                    @foreach ($unit[2]->elemen[2]->pertanyaan as $item)
                    <p style="margin-left: 40px;">{{ $item->nomor }}.{{ $item->nama }}</p>
                    @endforeach
                    <br>
                    </td>
                    <td style="text-align: center; "><input type="radio"></td>
                    <td style="text-align: center;"><input type="radio"></td>
                    <td></td>
                </tr>
            </table>
            <br>
            <table border="2" style="border-collapse: collapse;" class="display" width="100%">
                <tr>
                    <td width="60%">Unit Komptetensi</td>
                    <td colspan="3" width="40%">{{ $unit[3]->nama }}</td>
                </tr>
                <tr>
                    <td>Dapatkah Saya?</td>
                    <td style="text-align: center;">K</td>
                    <td style="text-align: center;">BK</td>
                    <td>Bukti Relevan</td>
                </tr>
                <tr>
                    <td>
                        <p style="margin-left: 20px; margin-top: 10px">Elemen Kompetensi : {{ $unit[3]->elemen[0]->name }}</p>
                    @foreach ($unit[3]->elemen[0]->pertanyaan as $item)
                    <p style="margin-left: 40px;">{{ $item->nomor }}.{{ $item->nama }}</p>
                    @endforeach
                    <br>
                    </td>
                    <td style="text-align: center; "><input type="radio"></td>
                    <td style="text-align: center;"><input type="radio"></td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <p style="margin-left: 20px; margin-top: 10px">Elemen Kompetensi : {{ $unit[3]->elemen[1]->name }}</p>
                    @foreach ($unit[3]->elemen[1]->pertanyaan as $item)
                    <p style="margin-left: 40px;">{{ $item->nomor }}.{{ $item->nama }}</p>
                    @endforeach
                    <br>
                    </td>
                    <td style="text-align: center; "><input type="radio"></td>
                    <td style="text-align: center;"><input type="radio"></td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <p style="margin-left: 20px; margin-top: 10px">Elemen Kompetensi : {{ $unit[3]->elemen[2]->name }}</p>
                    @foreach ($unit[3]->elemen[2]->pertanyaan as $item)
                    <p style="margin-left: 40px;">{{ $item->nomor }}.{{ $item->nama }}</p>
                    @endforeach
                    <br>
                    </td>
                    <td style="text-align: center; "><input type="radio"></td>
                    <td style="text-align: center;"><input type="radio"></td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <p style="margin-left: 20px; margin-top: 10px">Elemen Kompetensi : {{ $unit[3]->elemen[2]->name }}</p>
                    @foreach ($unit[3]->elemen[3]->pertanyaan as $item)
                    <p style="margin-left: 40px;">{{ $item->nomor }}.{{ $item->nama }}</p>
                    @endforeach
                    <br>
                    </td>
                    <td style="text-align: center; "><input type="radio"></td>
                    <td style="text-align: center;"><input type="radio"></td>
                    <td></td>
                </tr>
            </table>
            <br>
            <table border="2" style="border-collapse: collapse;" class="display" width="100%">
                <tr>
                    <td width="60%">Unit Komptetensi</td>
                    <td colspan="3" width="40%">{{ $unit[4]->nama }}</td>
                </tr>
                <tr>
                    <td>Dapatkah Saya?</td>
                    <td style="text-align: center;">K</td>
                    <td style="text-align: center;">BK</td>
                    <td>Bukti Relevan</td>
                </tr>
                <tr>
                    <td>
                        <p style="margin-left: 20px; margin-top: 10px">Elemen Kompetensi : {{ $unit[4]->elemen[0]->name }}</p>
                    @foreach ($unit[4]->elemen[0]->pertanyaan as $item)
                    <p style="margin-left: 40px;">{{ $item->nomor }}.{{ $item->nama }}</p>
                    @endforeach
                    <br>
                    </td>
                    <td style="text-align: center; "><input type="radio"></td>
                    <td style="text-align: center;"><input type="radio"></td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <p style="margin-left: 20px; margin-top: 10px">Elemen Kompetensi : {{ $unit[4]->elemen[1]->name }}</p>
                    @foreach ($unit[4]->elemen[1]->pertanyaan as $item)
                    <p style="margin-left: 40px;">{{ $item->nomor }}.{{ $item->nama }}</p>
                    @endforeach
                    <br>
                    </td>
                    <td style="text-align: center; "><input type="radio"></td>
                    <td style="text-align: center;"><input type="radio"></td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <p style="margin-left: 20px; margin-top: 10px">Elemen Kompetensi : {{ $unit[4]->elemen[2]->name }}</p>
                    @foreach ($unit[4]->elemen[2]->pertanyaan as $item)
                    <p style="margin-left: 40px;">{{ $item->nomor }}.{{ $item->nama }}</p>
                    @endforeach
                    <br>
                    </td>
                    <td style="text-align: center; "><input type="radio"></td>
                    <td style="text-align: center;"><input type="radio"></td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <p style="margin-left: 20px; margin-top: 10px">Elemen Kompetensi : {{ $unit[4]->elemen[3]->name }}</p>
                    @foreach ($unit[4]->elemen[3]->pertanyaan as $item)
                    <p style="margin-left: 40px;">{{ $item->nomor }}.{{ $item->nama }}</p>
                    @endforeach
                    <br>
                    </td>
                    <td style="text-align: center; "><input type="radio"></td>
                    <td style="text-align: center;"><input type="radio"></td>
                    <td></td>
                </tr>
            </table>
            <br>
            <table border="2" style="border-collapse: collapse;" class="display" width="100%">
                <tr>
                    <td width="60%">Unit Komptetensi</td>
                    <td colspan="3" width="40%">{{ $unit[4]->nama }}</td>
                </tr>
                <tr>
                    <td>Dapatkah Saya?</td>
                    <td style="text-align: center;">K</td>
                    <td style="text-align: center;">BK</td>
                    <td>Bukti Relevan</td>
                </tr>
                <tr>
                    <td>
                        <p style="margin-left: 20px; margin-top: 10px">Elemen Kompetensi : {{ $unit[5]->elemen[0]->name }}</p>
                    @foreach ($unit[5]->elemen[0]->pertanyaan as $item)
                    <p style="margin-left: 40px;">{{ $item->nomor }}.{{ $item->nama }}</p>
                    @endforeach
                    <br>
                    </td>
                    <td style="text-align: center; "><input type="radio"></td>
                    <td style="text-align: center;"><input type="radio"></td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <p style="margin-left: 20px; margin-top: 10px">Elemen Kompetensi : {{ $unit[5]->elemen[1]->name }}</p>
                    @foreach ($unit[5]->elemen[1]->pertanyaan as $item)
                    <p style="margin-left: 40px;">{{ $item->nomor }}.{{ $item->nama }}</p>
                    @endforeach
                    <br>
                    </td>
                    <td style="text-align: center; "><input type="radio"></td>
                    <td style="text-align: center;"><input type="radio"></td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <p style="margin-left: 20px; margin-top: 10px">Elemen Kompetensi : {{ $unit[5]->elemen[2]->name }}</p>
                    @foreach ($unit[5]->elemen[2]->pertanyaan as $item)
                    <p style="margin-left: 40px;">{{ $item->nomor }}.{{ $item->nama }}</p>
                    @endforeach
                    <br>
                    </td>
                    <td style="text-align: center; "><input type="radio"></td>
                    <td style="text-align: center;"><input type="radio"></td>
                    <td></td>
                </tr>
            </table>
        </div>
    </div>
</div>

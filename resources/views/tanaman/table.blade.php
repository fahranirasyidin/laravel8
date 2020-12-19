<table class="table">
    <thead class="thead_dark">
    <tr>
        <th>No</th>
        <th>ID</th>
        <th>Nama</th>
        <th>Aksi</th>
    </tr>
    </thead>
        <tbody>
            @foreach($tanamans as $item)
               <tr> <td> {{ $loop->iteration }} </td>
                <td> {{ $item->id }} </td>
                <td> {{ $item->nama }} </td>
                <td>
              <a href="{{ route('tanaman.show',$item->id) }}" class="btn btn-success">Tampil</a>
                </td></tr>
            @endforeach
        </tbody>
</table>
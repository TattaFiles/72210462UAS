<!-- untuk nomor 4 poin d  -->
<table border = "1">
    <thead>
        <th scope="col">Id</th>
        <th scope="col">Article Title</th>
        <th scope="col">Article Date</th>
        <th scope="col">Article Text</th>
    </thead>
    <tbody>
    @foreach($desc as $d)
        <tr>
                <td>{{ $d -> id }}</td>
                <td>{{ $d -> article_title }}</td>
                <td>{{ $d -> article_date }}</td>
                <td>{{ $d -> article_text }}</td>
        </tr>
    @endforeach
    </tbody>
</table
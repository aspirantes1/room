<style>
.container {
    display: flex;
}
</style>
<table class="container">
    <tr>
        <th> Имя: </th>
        <th> Цена: </th>
        <th> Спальни: </th>
        <th> Ванные: </th>
        <th> Этаж: </th>
        <th> Гаражей: </th>
</tr>
    @foreach ($rooms as $room)
    <tr>
       <td> {{ $room->Name }} </td>
       <td> {{ $room->Price }} </td>
       <td> {{ $room->Bedrooms }} </td>
       <td> {{ $room->Bathrooms }} </td>
       <td> {{ $room->Storeys }} </td>
       <td> {{ $room->Garages }} </td>
    </tr>
    @endforeach
</table>

{{ $rooms->links() }}
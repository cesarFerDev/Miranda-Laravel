@section('title')
    Orders
@endsection

<x-app-layout>

    <div class="py-12 text-left">
    <table style="width:80%" class="mx-auto sm:px-6 lg:px-8">
        <thead>
            <tr class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <th class="p-6 text-gray-900">ID</th>
                <th class="p-6 text-gray-900">User</th>
                <th class="p-6 text-gray-900">Room</th>
                <th class="p-6 text-gray-900">Type</th>
                <th class="p-6 text-gray-900">Description</th>
                <th class="p-6 text-gray-900">Created</th>
                <th class="p-6 text-gray-900">Edit</th>
                <th class="p-6 text-gray-900">Delete</th>
            </tr></a>
        </thead>
        <tbody>
            @foreach($orders as $order)
                @if($order->user_id == Auth::id())
                    <tr class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <td class="p-6 text-gray-900">{{$order->id}}</td>
                        <td class="p-6 text-gray-900">{{Auth::user()->name}}</td>
                        <td class="p-6 text-gray-900">{{$order->room_id}}</td>
                        <td class="p-6 text-gray-900">{{$order->type}}</td>
                        <td class="p-6 text-gray-900">{{$order->description}}</td>
                        <td class="p-6 text-gray-900">{{$order->created_at}}</td>
                        <td class="p-6 text-gray-900"><a href="orders/{{$order->id}}"><img src="assets/Orders/edit.svg" alt="Edit button"/></a></td>
                        <td>
                            <form action="{{ url('/orders', ['id' => $order->id])}}" method="POST">
                                @method('delete')
                                @csrf
                                <button style="font-size: 26px; color: red;" class="p-6" type="submit"><img src="assets/Orders/delete.svg" alt="Delete button"/></button>
                            </form>
                        </td>
                    </tr>
                @endif
            @endforeach
            
        </tbody>
    </table>
    </div>
    

    <!-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> -->
</x-app-layout>

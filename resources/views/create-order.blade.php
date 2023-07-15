@section('title')
    @if($order != null)
        Edit Order
    @else 
        New Order
    @endif
@endsection

<x-app-layout>
    <form class="py-12" method="POST">
        @csrf
        @if($order != null)
            @method('PATCH')
        @endif
        <div style="width: 50%; min-width: 350px" class="flex flex-col bg-white max-w-7xl mx-auto sm:px-6 lg:px-8 py-6">
            <label for="room" class="py-2 text-gray-900">Room Number: </label>
            <select style="width: 20%; min-width: 200px; border: none; border-bottom: 1px solid black; margin-bottom: 15px" name="room">
                @foreach($rooms as $room)
                    <option value="{{$room->number}}" {{$order != null ? ($order->room_id == $room->number ? "selected" : "") : ""}}>{{$room->type}} {{$room->number}}</option>
                @endforeach
                
            </select>
            <label for="type" class="py-2 text-gray-900">Type: </label>
            <select style="width: 20%; min-width: 200px; border: none; border-bottom: 1px solid black; margin-bottom: 15px" name="type">
                <option value="Food" {{$order != null ? ($order->type == "Food" ? "selected" : "") : ""}}>Food</option>
                <option value="Service" {{$order != null ? ($order->type == "Service" ? "selected" : "") : ""}}>Service</option>
            </select>
            <label for="description" class="py-2 text-gray-900">Description: </label>
            <input style="border: none; border-bottom: 1px solid black; margin-bottom: 15px" name="description" class="p-2 text-gray-900" value='{{$order != null ? $order->description : ""}}' required></input>
            <x-primary-button style="max-width:100px; justify-content: center; margin: 10px auto" type="submit">
                Save
            </x-primary-button>
        </div>
    </form>
</x-app-layout>
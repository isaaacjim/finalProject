<form action="modify{id}" method="POST">
     @csrf
     @method('PUT')
     <input type="hidden" name="id" value="{{ $id }}">
     <label for="name">Name:</label>
     <input type="text" name="name" value=>
     <br>
     <label for="prize">Prize:</label>
     <input type="text" name="prize" value=>
     <br>
     <button type="submit">Update</button>
</form>

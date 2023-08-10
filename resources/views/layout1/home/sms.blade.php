<form action="{{ url ('/message')}}" method="post">
    @csrf
    <input type="text" name="number" placeholder="number">
    <br><br>
    <input type="text" name="message" placeholder="message">
    <br><br>
    <button type="submit" name="submit">sendsms</button>
</form>
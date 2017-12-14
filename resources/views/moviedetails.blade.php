<form method="POST" action={{ action('MovieController@show') }}>
{{csrf_field()}}
    <input type="text" name="id" value="tt3778644">
    <input type="submit">
</form>
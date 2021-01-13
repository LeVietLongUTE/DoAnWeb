@extends('admin_layout')
@section('content_dashboard')
<h3>Chao admin 

    <?php
        $id = Session::get('id');
        echo $id;
        $level = Session::get('level');
        echo $level;
        ?>
        
</h3>
@endsection
@extends('layouts.standard')


@section('content')


<section class="home-default" style="padding-top: 70px;">
    <div class="container">

<?php
$works = $data['works'];
foreach($works as $work)
{
?>
<div><strong><?php echo $work->CLIENT; ?></strong> - <?php echo $work->NAME; ?> - <em><?php echo $work->WORK_YEAR; ?></em></div>
<?php
}
?>

    </div>
</section>
@stop
@extends('master')

@section('content')
	<div class="container">
		<div class="row">
				<div class="col text-center">
					<button class="btn btn-primary" @click.prevent="runTask" :disabled="isLoading">Run Task</button>
					
				</div>
		</div>
		
		<queues :newtask="newTask"> </queues>
		
	</div>


	- User clicks a button 
	- User a task is deployed 
		- Task sleep for 5 seconds 
		- and trigger event that it has completed its task {TaskComplete}
	- User sees the task status real time in dashboard
@endsection
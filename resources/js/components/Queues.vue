<template>
	<div>
		<div class="row">
			<div class="col queues">

				<table class="table table-bordered" v-if="!isLoading">
					<tr>
						<th>Serial</th>
						<th>Status</th>
					</tr>
					<tr v-for="task in tasks">
						<td>{{ task.id }}</td>
						<td> <span class="badge badge-primary">{{ task.status == 0 ? 'Running' : 'Completed' }}</span></td>
					</tr>
				</table>
				
				<div class="text-center" v-else>
					<div class="spinner-border" role="status" >
					  <span class="sr-only">Loading...</span>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</template>

<script>
	export default {
		props: ['newtask'],
		watch: {
			newtask(newValue, oldValue) {
				this.tasks.push(newValue);
			}
		},
		data() {
			return {
				isLoading: false,
				tasks: []
			};
		},

		methods: {
			updateTasks(data) {
				console.log('from child');
				console.log(data);
				this.tasks.push(data);
			}
		},

		mounted() {
					
			this.isLoading = true; 

			axios.get('/api/task')
				.then( (response) => {
					this.tasks = response.data;
					console.log(response.data);
					this.isLoading = false;
				});
		}
	}
</script>

<style>
	.queues {
		margin-top: 50px;
	}

	.badge {
		font-size: 100%;
	}
</style>
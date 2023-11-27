<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
               <div class="panel-heading"> MHC IT Tasks</div>

               <div class="panel-body">
                   <form method="POST" action="{{ route('tasks.store') }}">
                       @csrf

                       <label for="name">Task</label>
                       <input type="text" id="name" name="name">

                       <label for="amount">Amount</label>
                       <input type="number" id="amount" name="amount">

                       <label for="status">Status</label>
                       <input type="checkbox" id="status" name="status">

                       <button type="submit">Create</button>
                   </form>

                   <table class="table table-bordered"> <!-- Add 'table-bordered' class -->
                       <thead>
                           <tr>
                               <th>Task</th>
                               <th>Amount Needed</th>
                               <th>Status</th>
                           </tr>
                       </thead>
                       <tbody>
                           @foreach ($tasks as $task)
                               <tr>
                                  <td>{{ $task->task }}</td>
                                  <td>{{ $task->amount }}</td>
                                  <td>{{ $task->status }}</td>
                               </tr>
                           @endforeach
                       </tbody>
                   </table>
               </div>
            </div>
        </div>
    </div>
</div>
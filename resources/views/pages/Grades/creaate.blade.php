<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">
                    {{ trans('‏‏Grades_trans.add_Grade') }}
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- add_form -->
                <form action="{{ route('Grades.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <label  class="mr-sm-2">name:</label>
                            <input type="text" name="Name_Grades" class="form-control" >
                        </div>
                        <div class="col">
                            <label class="mr-sm-2">name en:</label>
                            <input type="text" class="form-control" neme="Name_Grades_en" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">{{ trans('‏‏Grades_trans.Notes') }} :</label>
                        <textarea class="form-control" name="Notes" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <br><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ trans('‏‏Grades_trans.Close') }}</button>
                <button type="submit" class="btn btn-success">{{ trans('‏‏Grades_trans.submit') }}</button>
            </div>
            </form>

        </div>
    </div>
</div>

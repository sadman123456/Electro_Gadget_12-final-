<x-admin.master>
    <!-- partial -->
    <x-slot:title>
        Category
        </x-slot>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Category List</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Index</li>
            </ol>
            <div class="btn-toolbar mb-2 mb-md-0">
                                    <div class="btn-group me-2">
                                        <a href="">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">PDF</button>
                                        </a>

                                        <button type="button" class="btn btn-sm btn-outline-secondary">Excel</button>
                                        
                                        <a href="">
                                            <button type="button" class="btn btn-sm btn-outline-danger">Trash</button>
                                        </a>
                                    </div>
                                    <a href="">
                                        <button type="button" class="btn btn-sm btn-outline-primary">
                                            <span data-feather="plus"></span>
                                            Add New
                                        </button>
                                    </a>
                                </div>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    DataTable
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Show</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Show</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td class="c_center">
                                    <a href="#"> <button type="button" class="btn btn-sm btn-outline-success">show</button></a>
                                </td>
                                <td class="c_center">
                                    <a href="#"> <button type="button" class="btn btn-sm btn-outline-info">Edit</button></a>
                                </td>
                                <td class="c_center">
                                <button type="button" class="btn btn-sm btn-outline-danger">Danger</button>
                            </td>

                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>

                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>

                            </tr>
                            <tr>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>

                            </tr>
                            <tr>
                                <td>Airi Satou</td>
                                <td>Accountant</td>

                            </tr>
                            <tr>
                                <td>Brielle Williamson</td>
                                <td>Integration Specialist</td>

                            </tr>
                            <tr>
                                <td>Herrod Chandler</td>
                                <td>Sales Assistant</td>

                            </tr>
                            <tr>
                                <td>Rhona Davidson</td>
                                <td>Integration Specialist</td>

                            </tr>




                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</x-admin.master>
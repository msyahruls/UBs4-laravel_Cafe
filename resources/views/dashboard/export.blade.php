<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        @foreach($categories as $category)
                    <h4>{{ $category->category_name }}</h4>
                        <table class="table table-sm table-bordered]">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($category->product as $t)
                                    <tr>
                                        <td>{{ $t->product_name }}</td>
                                        <td width="15%">{{ $t->product_price }}</td>
                                    </tr>
                                @empty
                                     <tr>
                                        <td colspan="2" style="padding: 5px">
                                            <p class="alert alert-danger" style="padding: 5px 20px">
                                                No Data
                                            </p>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="2" >
                                        Total : {{ $category->product->count() }}
                                    </td>
                                </th>
                            </tfoot>
                        </table>
        @endforeach

<h2>Hello Admin</h2>

<p>There is a new application from <strong>{{ $Application->name }}</strong> on
    <strong>{{ $Application->created_at }}</strong>, please find the applicant details below:
</p>

<p>Type: {{ $Application->type }}</p>
<p>Name: {{ $Application->name }}</p>
<p>Email: {{ $Application->email }}</p>
<p>Contact: {{ $Application->contact }}</p>
<p>Address:
    {{ $Application->address1 }}, {{ $Application->address2 }}, {{ $Application->postcode }},
    {{ $Application->city }}
</p>
<p>Package Subscription: {{ $Application->package_id }}</p>
<p>Message: {{ $Application->message }}</p>


<a href='http://telco-v2.test/applications/list'>Check in admin dashboard</a>

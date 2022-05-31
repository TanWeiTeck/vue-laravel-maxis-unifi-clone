<h2>Hello Admin</h2>

<p>There is a new coverage check request from <strong>{{ $Coverage_Check->name }}</strong> on
    <strong>{{ $Coverage_Check->created_at }}</strong>, please find the applicant details below:
</p>

<p>Name: {{ $Coverage_Check->name }}</p>
<p>Email: {{ $Coverage_Check->email }}</p>
<p>Contact: {{ $Coverage_Check->contact }}</p>
<p>Location: {{ $Coverage_Check->location }}</p>
<p>Message: {{ $Coverage_Check->message }}</p>


<a href='http://telco.test/admin'>Check in admin dashboard</a>

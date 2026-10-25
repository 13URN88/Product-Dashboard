<?php
ob_start();
?>
<!--  Changed the Products heading to Customers. -->
<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <h2 class="mb-1">Customers</h2>
        <p class="text-muted mb-0">Manage and track all your customers</p>
    </div>
</div>
<!--  Replaced the product fields with the required customer fields. -->
<div class="card shadow-sm mb-4">
    <div class="card-body">
        <div class="row g-0 align-items-center mb-3">
            <div class="col">
                <h5 class="mb-0"><i class="bi bi-person-plus text-primary me-2"></i>Customer Form</h5>
                <small class="text-muted">Fill in the details of a customer</small>
            </div>
            <div class="col-auto"><span class="badge bg-primary">* Required fields</span></div>
        </div>
        <hr>
        <form id="customerForm" action="" method="post" class="needs-validation" novalidate>
            <div class="row g-3">
                <div class="col-md-3">
                    <label for="customer_num" class="form-label">Customer ID <span class="text-danger">*</span></label>
                    <input name="customer_num" id="customer_num" type="text" class="form-control"
                           placeholder="Enter Customer ID" required>
                </div>
                <div class="col-md-3">
                    <label for="customer_name" class="form-label">Name <span class="text-danger">*</span></label>
                    <input name="customer_name" id="customer_name" type="text" class="form-control"
                           placeholder="Enter Customer Name" required>
                </div>
                <div class="col-md-3">
                    <label for="customer_gender" class="form-label">Gender <span class="text-danger">*</span></label>
                    <select name="customer_gender" id="customer_gender" class="form-control"
                            placeholder="Select Gender" required>
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="customer_phone" class="form-label">Phone Number <span class="text-danger">*</span></label>
                    <input name="customer_phone" id="customer_phone" type="text" class="form-control"
                           placeholder="Enter Phone Number" required>
                </div>
                <div class="col-md-3">
                    <label for="register_date" class="form-label">Register Date <span class="text-danger">*</span></label>
                    <input name="register_date" id="register_date" type="date" class="form-control"
                           placeholder="Select Register Date" required>
                </div>
            </div>
            <hr class="mt-4 mb-3">
            <button type="submit" name="create" id="saveButton" class="btn btn-primary">
                <i id="saveIcon" class="bi bi-save me-1"></i><span id="saveText">Create</span>
            </button>
            <button type="reset" class="btn btn-secondary">
                <i class="bi bi-arrow-counterclockwise me-1"></i>Clear
            </button>
            <div id="formMessage" class="mt-3" role="status" aria-live="polite"></div>
        </form>
    </div>
</div>
<!--  Replaced the product table with the customer list. -->
<div class="card shadow-sm">
    <div class="card-body">
        <div class="row align-items-center mb-3">
            <div class="col">
                <h5 class="mb-0"><i class="bi bi-table text-primary me-2"></i>Customer List</h5>
                <small class="text-muted">View and manage all customers</small>
            </div>
            <div class="col-auto"><span id="customerTotal" class="badge bg-success">Total: 1 items</span></div>
        </div>
        <hr>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Customer ID</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Phone</th>
                        <th>Register Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="customerRows"></tbody>
            </table>
        </div>
    </div>
</div>

<!-- JavaScript lets the form create, edit, and delete sample customers without a database. -->
<script>
(function () {
    const storageKey = 'PT1';
    const sample = [{
        customer_num: 'C001',
        customer_name: 'John Doe',
        customer_gender: 'Male',
        customer_phone: '012-3456789',
        register_date: '2026-01-01'
    }];
    const form = document.getElementById('customerForm');
    const rows = document.getElementById('customerRows');
    const total = document.getElementById('customerTotal');
    const message = document.getElementById('formMessage');
    const saveText = document.getElementById('saveText');
    const saveIcon = document.getElementById('saveIcon');
    const fields = ['customer_num', 'customer_name', 'customer_gender', 'customer_phone', 'register_date'];
    let customers = readCustomers();
    let editingId = '';
    function readCustomers() {
        try {
            const saved = localStorage.getItem(storageKey);
            if (saved === null) {
                localStorage.setItem(storageKey, JSON.stringify(sample));
                return sample.slice();
            }
            const data = JSON.parse(saved);
            return Array.isArray(data) ? data : sample.slice();
        } catch (error) {
            return sample.slice();
        }
    }
    function saveCustomers() {
        try {
            localStorage.setItem(storageKey, JSON.stringify(customers));
        } catch (error) {
            showMessage('Could not save changes in browser storage.', 'warning');
        }
    }
    function showMessage(text, type) {
        message.textContent = text;
        message.className = text ? 'alert alert-' + type + ' mt-3 mb-0' : 'mt-3';
    }
    function displayDate(date) {
        if (!date) return '';
        const parts = date.split('-');
        return parts.length === 3 ? parts[2] + '-' + parts[1] + '-' + parts[0] : date;
    }
    function addCell(row, value) {
        const cell = document.createElement('td');
        cell.textContent = value || '';
        row.appendChild(cell);
        return cell;
    }
    function actionButton(icon, style, label, action) {
        const button = document.createElement('button');
        button.type = 'button';
        button.className = 'btn btn-sm ' + style + ' me-1';
        button.title = label;
        button.setAttribute('aria-label', label);
        const image = document.createElement('i');
        image.className = icon;
        button.appendChild(image);
        button.addEventListener('click', action);
        return button;
    }
    function renderCustomers() {
        rows.replaceChildren();
        total.textContent = 'Total: ' + customers.length + ' items';
        if (!customers.length) {
            const row = document.createElement('tr');
            const cell = addCell(row, 'No customers found');
            cell.colSpan = 6;
            cell.className = 'text-center text-muted';
            rows.appendChild(row);
            return;
        }
        customers.forEach(function (customer) {
            const row = document.createElement('tr');
            addCell(row, customer.customer_num);
            addCell(row, customer.customer_name);
            addCell(row, customer.customer_gender);
            addCell(row, customer.customer_phone);
            addCell(row, displayDate(customer.register_date));
            const actions = addCell(row, '');
            actions.appendChild(actionButton('bi bi-pencil', 'btn-warning', 'Edit', function () {
                editCustomer(customer.customer_num);
            }));
            actions.appendChild(actionButton('bi bi-trash', 'btn-danger', 'Delete', function () {
                deleteCustomer(customer.customer_num);
            }));
            rows.appendChild(row);
        });
    }
    function resetForm() {
        editingId = '';
        saveText.textContent = 'Create';
        saveIcon.className = 'bi bi-save me-1';
        showMessage('', 'success');
    }
    function editCustomer(id) {
        const customer = customers.find(item => item.customer_num === id);
        if (!customer) return;
        fields.forEach(name => form.elements[name].value = customer[name] || '');
        editingId = id;
        saveText.textContent = 'Update';
        saveIcon.className = 'bi bi-pencil-square me-1';
        showMessage('Update the details and click Update.', 'info');
        form.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
    function deleteCustomer(id) {
        if (!confirm('Delete customer ' + id + '?')) return;
        customers = customers.filter(item => item.customer_num !== id);
        saveCustomers();
        renderCustomers();
        if (editingId === id) {
            form.reset();
            resetForm();
        }
        showMessage('Customer deleted.');
    }
    form.addEventListener('submit', function (event) {
        event.preventDefault();
        if (!form.checkValidity()) {
            form.reportValidity();
            return;
        }
        const customer = {};
        fields.forEach(name => customer[name] = form.elements[name].value.trim());
        if (fields.some(name => !customer[name])) {
            showMessage('Please complete all required fields.');
            return;
        }
        const duplicate = customers.some(item =>
            item.customer_num.toLowerCase() === customer.customer_num.toLowerCase() &&
            item.customer_num !== editingId
        );
        if (duplicate) {
            showMessage('That Customer ID already exists.', 'danger');
            form.elements.customer_num.focus();
            return;
        }
        const wasEditing = editingId !== '';
        if (wasEditing) {
            const index = customers.findIndex(item => item.customer_num === editingId);
            if (index !== -1) customers[index] = customer;
        } else {
            customers.push(customer);
        }
        saveCustomers();
        renderCustomers();
        form.reset();
        resetForm();
        showMessage(wasEditing ? 'Customer updated.' : 'Customer created.', 'success');
    });
    form.addEventListener('reset', function () {
        setTimeout(resetForm, 0);
    });
    renderCustomers();
})();
</script>
<?php
$content = ob_get_clean();
require_once 'layout.php';
?>

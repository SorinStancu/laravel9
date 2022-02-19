    var application = new Vue({
    el: '#App',
    data: {
    allData: '',
    alldates: '',
    myModel: false,
    isShowing1: true,
    isShowing2: false,
    checkbox: false,
    search: '',
    icon1: '<span style="color: green">open</span>',
    icon: '<span style="color: green">open</span>',
    iconf1: 'up',
    iconf: 'up',
    actionButton: 'Insert',
    dynamicTitle: 'Add Data',
    users: [],
    pageNo: 1,
    pageSize: 5,
    pageCount: 0,
    showPage: 'da',
    currentSort: 'name',
    currentSortDir: 'asc',
    dismissSecs: 4,
    dismissCountDown: 0,
    test: 'da'
},

    methods: {
    getImgUrl(pet) {
    return ('http://westbuy.ro/files/products/' + pet);
},
    /*getImageData(imageId) {
        return axios.get(route('images.loadId', imageId));
    },

    async loadImage(imageId) {
        let {data: imageData} = await this.getImageData(imageId);

        console.log(imageData);

        return imageData;
    },*/
    /*loadImg(imag) {
                         this.isLoad = true;
                                 var img = imag;
                        console.log('img: ', img);
                        this.url = this.images;
                 },*/
    getImageData(imageId) {
    /*axios.get(route('action.php', imageId)).then((response) => {
             return response.data.imageData;
     });*/
    // var id = imageId;
    /*axios.post('action.php', {
            action: 'imagini' ,
            id: id
    }).then(function (response) {
            console.log('activ ',response.data);
            return response.data;
    });*/
    return 'http://westbuy.ro/files/products/'.imageId;
},
    countDownChanged(dismissCountDown) {
    this.dismissCountDown = dismissCountDown;
},
    showAlert() {
    this.dismissCountDown = this.dismissSecs
},
    fetchAllData: function () {
    axios.post('action.php', {
    action: 'fetchall'
}).then(function (response) {
    application.allData = response.data;
});
},
    categories: function () {
    axios.post('action.php', {
    action: 'incarca_categorii'
}).then(function (response) {
    application.alldates = response.data;
});
},
    toggleCheckbox(id) {
    this.checkbox = !this.checkbox;
    this.$emit('setCheckboxVal', this.checkbox);
    var activ = this.checkbox;
    if (activ === true) {
    var activ = 'nu';
} else if (activ === false) {
    var activ = 'da';
}
    var id = id;
    /* console.log('activ ', activ );
                     console.log('id ', id );*/
    axios.post('action.php', {
    action: 'updatestatus',
    activ: activ,
    id: id
}).then(function (response) {

});
},
    onChangeSite: function (e, i) {
    var id = e.target.value;
    var name = e.target.options[e.target.options.selectedIndex].text;
    var hiddenId = i;
    /*console.log('id ', id );
    console.log('name ', name );
    console.log('hiddenId ', hiddenId );*/
    axios.post('action.php', {
    action: 'updatepoz',
    hiddenId: application.hiddenId,
    poz: name,
    id: hiddenId
}).then(function (response) {
    application.fetchAllData();
});
    this.showAlert();
},
    changeIcon1() {
    this.icon1 = (this.icon1 === '<span style="color: green">open</span>' ? '<span style="color: red">close</span>' : '<span style="color: green">open</span>');
    this.iconf1 = (this.iconf1 === 'up' ? 'down' : 'up');
    this.fetchAllData();
},
    changeIcon2() {
    this.icon = (this.icon === '<span style="color: green">open</span>' ? '<span style="color: red">close</span>' : '<span style="color: green">open</span>')
    this.iconf = (this.iconf === 'up' ? 'down' : 'up')
},
    openModel: function () {
    application.first_name = '';
    application.last_name = '';
    application.actionButton = 'Insert';
    application.dynamicTitle = 'Add Data';
    application.myModel = true;
},
    submitData: function () {
    if (application.first_name != '' && application.last_name != '') {
    if (application.actionButton == 'Insert') {
    axios.post('action.php', {
    action: 'insert',
    firstName: application.first_name,
    lastName: application.last_name
}).then(function (response) {
    application.myModel = false;
    application.fetchAllData();
    application.first_name = '';
    application.last_name = '';
    alert(response.data.message);
});
}
    if (application.actionButton == 'Update') {
    axios.post('action.php', {
    action: 'update',
    nume: application.nume,
    email: application.email,
    telefon: application.telefon,
    hiddenId: application.hiddenId
}).then(function (response) {
    application.myModel = false;
    application.fetchAllData();
    application.nume = '';
    application.email = '';
    application.telefon = '';
    application.hiddenId = '';
    alert(response.data.message);
});
}

} else {
    alert('Fill All Field');
}
},
    fetchData: function (id) {
    axios.post('action.php', {
    action: 'fetchSingle',
    id: id
}).then(function (response) {
    application.nume = response.data.nume;
    application.email = response.data.email;
    application.telefon = response.data.telefon;
    application.hiddenId = response.data.id;
    application.myModel = true;
    application.actionButton = 'Update';
    application.dynamicTitle = 'Modifica';
});
},
    deleteData: function (id) {
    if (confirm('Esti sigur ca vrei sa stergi?')) {
    axios.post('action.php', {
    action: 'delete',
    id: id
}).then(function (response) {
    application.fetchAllData();
});
}
},
    init: function () {
    this.virtualService({
    pageNo: this.pageNo,
    pageSize: this.pageSize
});
},
    page: function (pageNo) {
    this.virtualService({
    pageNo: pageNo,
    pageSize: this.pageSize
});
},
    first: function () {
    this.pageNo = 1;
    this.virtualService({
    pageNo: this.pageNo,
    pageSize: this.pageSize
});
},
    last: function () {
    this.pageNo = this.pageCount;
    this.virtualService({
    pageNo: this.pageNo,
    pageSize: this.pageSize
});
},
    prev: function () {
    if (this.pageNo > 1) {
    this.pageNo -= 1;
    this.virtualService({
    pageNo: this.pageNo,
    pageSize: this.pageSize
});
}
},
    next: function () {
    if (this.pageNo < this.pageCount) {
    this.pageNo += 1;
    this.virtualService({
    pageNo: this.pageNo,
    pageSize: this.pageSize
});
}
},
    /*virtualDataFromDb: function () {
    var users = [];
    console.log('sesiune ', 'id');
    <?php
    $query = " SELECT * FROM `categories` WHERE `lvl`='1'  && `id_lang` = '1'  ORDER BY `poz` ASC";
    $statement = $pdo->prepare($query);
    $statement->execute();
    $count = '0';
    while($r = $statement->fetch(PDO::FETCH_ASSOC)){?>
    var user = {
    id: <?=$count++?>,
    name: '<?=$r['name']?>'
};
    users.push(user);
    <?php  } ?>
    return users;
},*/
    count: function (condition) {
    return this.virtualDataFromDb().length;
},
    queryFromVirtualDB: function (condition, startRow, endRow) {
    var result = [];
    var condition = {};
    var data = this.virtualDataFromDb();
    var count = this.count(condition);
    for (var i = startRow - 1; i < endRow; i++) {
    if (i < count) {
    result.push(data[i]);
}
}
    return result;
},
    virtualService: function (params) {

    var result = [];
    var condition = {};
    var pageNo = params.pageNo;
    var pageSize = params.pageSize;
    var pageCount = Math.ceil(this.count(condition) / pageSize);

    if (pageNo == 0) pageNo = 1;
    if (pageNo < 0) pageNo = pageCount;
    else if (pageNo > pageCount) pageNo = pageCount;
    var startRow = (pageNo - 1) * pageSize + 1;
    var endRow = startRow + pageSize - 1;
    var data = this.queryFromVirtualDB(condition, startRow, endRow);

    this.users = data;
    this.pageNo = pageNo;
    this.pageCount = pageCount;
},
    sort: function (s) {
    if (s === this.currentSort) {
    this.currentSortDir = this.currentSortDir === 'asc' ? 'desc' : 'asc';
}
    this.currentSort = s;
}
},
    computed: {
    categorii: function () {
    if (this.search) {
    this.pageCount = 0;
    this.showPage = 'nu';
    return this.users.filter(row => {
    return row.name.toLowerCase().includes(this.search.toLowerCase());
});
}
    if (this.sort) {
    return this.users.sort((a, b) => {
    let modifier = 1;
    if (this.currentSortDir === 'desc') modifier = -1;
    if (a[this.currentSort] < b[this.currentSort]) return -1 * modifier;
    if (a[this.currentSort] > b[this.currentSort]) return 1 * modifier;
    return 0;
});
}

}

},
    created: function () {
    this.categories();
},
    mounted: function () {
    this.init();
}
});
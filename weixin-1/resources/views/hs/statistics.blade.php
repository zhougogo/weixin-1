<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>惠氏活动统计</title>
    <link rel="stylesheet" type="text/css" href="http://unpkg.com/iview/dist/styles/iview.css">
    <script type="text/javascript" src="http://vuejs.org/js/vue.min.js"></script>
    <script type="text/javascript" src="http://unpkg.com/iview/dist/iview.min.js"></script>
</head>
<body>
<div id="app">
    <i-table :columns="columns1" :data="data1"></i-table>
</div>
<script>
    new Vue({
        el: '#app',
        data: {
            columns1: [
                {
                    title: 'ID',
                    key: 'id'
                },
                {
                    title: '昵称',
                    key: 'nickname'
                },
                {
                    title: '头像',
                    key: 'headimgurl',
                    render (row, column, index) {
                        return '<img style="weight:100px;height: 100px; " src="' + row.headimgurl + '"/>';
                    }
                },
                {
                    title: '答对数量',
                    key: 'quantity'
                },
                {
                    title: '中奖码',
                    key: 'prize_code'
                },
                {
                    title: '时间',
                    key: 'created_at'
                }
            ],
            data1: {!! $results !!},
            visible: false
        },
        methods: {
            show: function () {
                this.visible = true;
            }
        }
    })
</script>
</body>
</html>
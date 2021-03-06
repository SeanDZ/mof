<link rel="stylesheet" href="<?php echo e(asset('http://cdn.bootcss.com/bootstrap/3.3.2/css/bootstrap.min.css')); ?>">

<?php $__env->startSection('content'); ?>
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="#">莫夫--莫夫设计</a> &raquo;莫夫设计图片
    </div>
    <div class="result_content">
        <div class="short_wrap">
            <a href="<?php echo e(url('admin/mof_design/design/create')); ?>" style="width: 120px;height: 45px;background: #eee;display: block;text-align: center;padding-top: 15px;font-size: 20px">添加图片</a>
        </div>
    </div>
    <div class="result_wrap">
        <div class="result_content">
            <table class="list_tab">
                <tr>
                    <!--<th class="tc" width="5%"><input type="checkbox" name=""></th>-->
                    <th class="tc">ID</th>
                    <th class="tc">分类ID</th>
                    <th style="text-align: center">描述</th>
                    <th style="text-align: center">图片</th>
                    <th>操作</th>
                </tr>
                <?php foreach($field as $v): ?>
                    <tr class="img_lst">
                        <td class="tc"><?php echo e($v->id); ?></td>
                        <td class="tc"><?php echo e($v->cate); ?></td>
                        <td class="tc"><?php echo e($v->describe); ?></td>
                        <td><img style="width:150px;height: 85px" src="/<?php echo e($v->image); ?>" alt=""></td>
                        <td>
                            <a href="<?php echo e(url('admin/mof_design/design/'.$v->id.'/edit')); ?>">编辑</a>
                            <a href="javascript:;" onclick="del(<?php echo e($v->id); ?>)">删除</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <?php echo $field->links(); ?>


        </div>
    </div>

    <script>
        //删除分类
        function del(id) {
            layer.confirm('Are you sure?', {
                btn: ['Yes','No'] //按钮
            }, function(){
                $.post("<?php echo e(url('admin/mof_design/design/')); ?>/"+id,{'_method':'delete','_token':"<?php echo e(csrf_token()); ?>"},function (data) {
                    if(data.status==0){
                        location.href = location.href;
                        layer.msg(data.msg, {icon: 6});
                    }else{
                        layer.msg(data.msg, {icon: 5});
                    }
                });
//            layer.msg('的确很重要', {icon: 1});
            }, function(){

            });
        }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php

use yii\db\Schema;
use yii\db\Migration;

class m150529_060420_update_school_table extends Migration
{
    public function up()
    {
        Yii::$app->db->createCommand('SET FOREIGN_KEY_CHECKS=0;')->execute();
        $this->truncateTable('school');
        $this->dropColumn('school','major');
        $this->batchInsert('school',
            ['school_id','name','depart','degree','created_at'],
            [[10101, '北京大学（医学部）', '临床医学8年制', 1, time()],
            [10102, '北京大学（医学部）', '基础医学8年制', 1, time()],
            [10103, '北京大学（医学部）', '口腔医学8年制', 1, time()],
            [10104, '北京大学（医学部）', '临床医学5年制', 1, time()],
            [10105, '北京大学（医学部）', '预防医学7年制', 1, time()],
            [10106, '北京大学（医学部）', '应用药学6年制', 1, time()],

            [10107, '北京大学（医学部）', '临床医学5年制', 0, time()],
            [10108, '北京大学（医学部）', '口腔医学5年制', 0, time()],
            [10109, '北京大学（医学部）', '生物医学英语', 0, time()],
            [10110, '北京大学（医学部）', '预防医学5年制', 0, time()],
            [10111, '北京大学（医学部）', '应用药学4年制', 0, time()],
            [10112, '北京大学（医学部）', '护理学', 0, time()],
            [10113, '北京大学（医学部）', '医学实验技术', 0, time()],
            [10114, '北京大学（医学部）', '医学检验技术', 0, time()],
            [10115, '北京大学（医学部）', '口腔医学技术', 0, time()],

            [10201, '北京大学', '城市与环境学院',0, time()],
            [10202, '北京大学', '地球与空间科学学院', 0, time()],
            [10203, '北京大学', '法学院', 0, time()],
            [10204, '北京大学', '工学院', 0, time()],
            [10205, '北京大学', '光华管理学院', 0, time()],
            [10206, '北京大学', '国际关系学院', 0, time()],
            [10207, '北京大学', '化学与分子工程学院', 0, time()],
            [10208, '北京大学', '环境科学与工程学院', 0, time()],
            [10209, '北京大学', '经济学院', 0, time()],
            [10210, '北京大学', '考古文博学院', 0, time()],
            [10211, '北京大学', '历史学系', 0, time()],
            [10212, '北京大学', '社会学系', 0, time()],
            [10213, '北京大学', '生命科学学院', 0, time()],
            [10214, '北京大学', '数学科学学院', 0, time()],
            [10215, '北京大学', '外国语学院', 0, time()],
            [10216, '北京大学', '物理学院', 0, time()],               
            [10217, '北京大学', '心理学系', 0, time()],
            [10218, '北京大学', '新闻与传播学院', 0, time()],
            [10219, '北京大学', '信息管理系', 0, time()],
            [10220, '北京大学', '信息科学技术学院', 0, time()],
            [10221, '北京大学', '艺术学院', 0, time()],
            [10222, '北京大学', '元培学院', 0, time()],
            [10223, '北京大学', '哲学系', 0, time()],
            [10224, '北京大学', '政府管理学院', 0, time()],
            [10225, '北京大学', '中国语言文学系', 0, time()]

            ]);
        Yii::$app->db->createCommand('SET FOREIGN_KEY_CHECKS=1;')->execute();
    }

    public function down()
    {
        Yii::$app->db->createCommand('SET FOREIGN_KEY_CHECKS=0;')->execute();
        $this->truncateTable('school');
        $this->addColumn('school', 'major', Schema::TYPE_STRING . '(45) NOT NULL AFTER `depart`'); 
        $this->batchInsert('school',
            ['school_id','name','depart','major','degree','created_at'],
            [[1010101, '北京大学（医学部）', '基础医学院', '临床医学8年制', 0, time()],
            [1010102, '北京大学（医学部）', '基础医学院', '临床医学5年制', 0, time()],
            [1010103, '北京大学（医学部）', '基础医学院', '基础医学8年制', 0, time()],
            [1010104, '北京大学（医学部）', '基础医学院', '口腔医学8年制', 0, time()],
            [1010105, '北京大学（医学部）', '基础医学院', '口腔医学5年制', 0, time()],
            [1010106, '北京大学（医学部）', '基础医学院', '医学实验技术', 0, time()],
            [1010107, '北京大学（医学部）', '基础医学院', '医学检验技术', 0, time()],
            [1010108, '北京大学（医学部）', '基础医学院', '口腔医学技术', 0, time()],
            [1010201, '北京大学（医学部）', '公共卫生学院', '预防医学7年制', 0, time()],
            [1010202, '北京大学（医学部）', '公共卫生学院', '预防医学5年制', 0, time()],
            [1010301, '北京大学（医学部）', '药学院', '应用药学6年制', 0, time()],
            [1010302, '北京大学（医学部）', '药学院', '应用药学4年制', 0, time()],
            [1010401, '北京大学（医学部）', '护理学院', '护理学', 0, time()],
            [1010501, '北京大学（医学部）', '医学人文研究院', '生物医学英语', 0, time()],
            [1020101, '北京大学', '数学科学学院', '数学', 0, time()],
            [1020102, '北京大学', '数学科学学院', '概率统计', 0, time()],
            [1020103, '北京大学', '数学科学学院', '科学与工程计算', 0, time()],
            [1020104, '北京大学', '数学科学学院', '信息科学', 0, time()],
            [1020105, '北京大学', '数学科学学院', '金融数学', 0, time()],
            [1020201, '北京大学', '物理学院', '物理学', 0, time()],
            [1020202, '北京大学', '物理学院', '大气与海洋科学', 0, time()],
            [1020203, '北京大学', '物理学院', '天体物理', 0, time()],
            [1020301, '北京大学', '化学与分子工程学院', '化学', 0, time()],
            [1020302, '北京大学', '化学与分子工程学院', '应用化学', 0, time()],
            [1020303, '北京大学', '化学与分子工程学院', '材料化学', 0, time()],
            [1020304, '北京大学', '化学与分子工程学院', '化学生物学', 0, time()],
            [1020401, '北京大学', '地球与空间科学学院', '地质学', 0, time()],
            [1020402, '北京大学', '地球与空间科学学院', '地球化学', 0, time()],
            [1020403, '北京大学', '地球与空间科学学院', '地球物理', 0, time()],
            [1020404, '北京大学', '地球与空间科学学院', '遥感与地理信息系统', 0, time()],
            [1020405, '北京大学', '地球与空间科学学院', '空间科学与应用技术', 0, time()],
            [1020501, '北京大学', '城市与环境学院', '环境科学', 0, time()],
            [1020502, '北京大学', '城市与环境学院', '生态学', 0, time()],
            [1020503, '北京大学', '城市与环境学院', '自然地理与资源环境', 0, time()],
            [1020504, '北京大学', '城市与环境学院', '城市规划（五年制工科）', 0, time()],
            [1020505, '北京大学', '城市与环境学院', '人文地理与城乡规划', 0, time()],
            [1020601, '北京大学', '生命科学学院', '生物科学', 0, time()],
            [1020602, '北京大学', '生命科学学院', '生物技术', 0, time()],
            [1020701, '北京大学', '心理学系', '基础心理学', 0, time()],
            [1020702, '北京大学', '心理学系', '应用心理学', 0, time()],
            [1020801, '北京大学', '环境科学与工程学院', '环境科学', 0, time()],
            [1020802, '北京大学', '环境科学与工程学院', '环境工程', 0, time()],
            [1020803, '北京大学', '环境科学与工程学院', '环境管理', 0, time()],
            [1020901, '北京大学', '信息科学技术学院', '计算机科学与技术', 0, time()],
            [1020902, '北京大学', '信息科学技术学院', '电子信息科学与技术', 0, time()],
            [1020903, '北京大学', '信息科学技术学院', '微电子学', 0, time()],
            [1020904, '北京大学', '信息科学技术学院', '智能科学与技术', 0, time()],
            [1021001, '北京大学', '工学院', '理论与应用力学', 0, time()],
            [1021002, '北京大学', '工学院', '工程结构分析', 0, time()],
            [1021003, '北京大学', '工学院', '能源与资源工程', 0, time()],
            [1021004, '北京大学', '工学院', '航空航天工程', 0, time()],
            [1021005, '北京大学', '工学院', '生物医学工程', 0, time()],
            [1021006, '北京大学', '工学院', '材料科学与工程', 0, time()],
            [1021101, '北京大学', '中国语言文学系', '中国文学', 0, time()],
            [1021102, '北京大学', '中国语言文学系', '汉语语言学', 0, time()],
            [1021103, '北京大学', '中国语言文学系', '古典文献学', 0, time()],
            [1021104, '北京大学', '中国语言文学系', '应用文学系', 0, time()],
            [1021201, '北京大学', '历史学系', '历史学（中国史）', 0, time()],
            [1021202, '北京大学', '历史学系', '世界史', 0, time()],
            [1021203, '北京大学', '历史学系', '外国语言与外国历史', 0, time()],
            [1021301, '北京大学', '考古文博学院', '考古学', 0, time()],
            [1021302, '北京大学', '考古文博学院', '博物馆学', 0, time()],
            [1021303, '北京大学', '考古文博学院', '文物建筑', 0, time()],
            [1021304, '北京大学', '考古文博学院', '文物保护', 0, time()],
            [1021401, '北京大学', '外国语学院', '英语', 0, time()],
            [1021402, '北京大学', '外国语学院', '法语', 0, time()],
            [1021403, '北京大学', '外国语学院', '德语', 0, time()],
            [1021404, '北京大学', '外国语学院', '俄语', 0, time()],
            [1021405, '北京大学', '外国语学院', '西班牙语', 0, time()],
            [1021406, '北京大学', '外国语学院', '日语', 0, time()],
            [1021407, '北京大学', '外国语学院', '阿拉伯语', 0, time()],
            [1021408, '北京大学', '外国语学院', '朝鲜语（韩国语）', 0, time()],
            [1021409, '北京大学', '外国语学院', '梵语巴利语', 0, time()],
            [1021410, '北京大学', '外国语学院', '印度尼西亚语', 0, time()],
            [1021411, '北京大学', '外国语学院', '乌尔都语', 0, time()],
            [1021412, '北京大学', '外国语学院', '泰语', 0, time()],
            [1021413, '北京大学', '外国语学院', '菲律宾语', 0, time()],
            [1021501, '北京大学', '哲学系', '哲学', 0, time()],
            [1021502, '北京大学', '哲学系', '宗教学', 0, time()],
            [1021503, '北京大学', '哲学系', '哲学（科技哲学与逻辑学方向）', 0, time()],
            [1021601, '北京大学', '艺术学院', '艺术史论', 0, time()],
            [1021602, '北京大学', '艺术学院', '戏剧影视文学', 0, time()],
            [1021603, '北京大学', '艺术学院', '文化产业管理', 0, time()],
            [1021701, '北京大学', '国际关系学院', '外交学与外事管理', 0, time()],
            [1021702, '北京大学', '国际关系学院', '国际政治', 0, time()],
            [1021703, '北京大学', '国际关系学院', '国际政治经济学', 0, time()],
            [1021801, '北京大学', '社会学系', '社会学', 0, time()],
            [1021802, '北京大学', '社会学系', '社会工作', 0, time()],
            [1021901, '北京大学', '法学院', '法学', 0, time()],
            [1022001, '北京大学', '经济学院', '经济学', 0, time()],
            [1022002, '北京大学', '经济学院', '金融学', 0, time()],
            [1022003, '北京大学', '经济学院', '国际经济与贸易', 0, time()],
            [1022004, '北京大学', '经济学院', '风险管理与保险学', 0, time()],
            [1022005, '北京大学', '经济学院', '财政学', 0, time()],
            [1022006, '北京大学', '经济学院', '发展经济学', 0, time()],
            [1022101, '北京大学', '光华管理学院', '金融学', 0, time()],
            [1022102, '北京大学', '光华管理学院', '金融经济学', 0, time()],
            [1022103, '北京大学', '光华管理学院', '会计学', 0, time()],
            [1022104, '北京大学', '光华管理学院', '市场营销', 0, time()],
            [1022201, '北京大学', '信息管理系', '信息管理与信息系统', 0, time()],
            [1022202, '北京大学', '信息管理系', '图书馆学', 0, time()],
            [1022301, '北京大学', '政府管理学院', '政治学与行政学', 0, time()],
            [1022302, '北京大学', '政府管理学院', '公共政策学', 0, time()],
            [1022303, '北京大学', '政府管理学院', '城市管理学', 0, time()],
            [1022304, '北京大学', '政府管理学院', '行政管理学', 0, time()],
            [1022401, '北京大学', '新闻与传播学院', '新闻学', 0, time()],
            [1022402, '北京大学', '新闻与传播学院', '广播电视新闻学', 0, time()],
            [1022403, '北京大学', '新闻与传播学院', '广告学', 0, time()],
            [1022404, '北京大学', '新闻与传播学院', '编辑出版学', 0, time()],
            [1022405, '北京大学', '新闻与传播学院', '传播学', 0, time()],
            [1022501, '北京大学', '元培学院', '整合科学', 0, time()],
            [1022502, '北京大学', '元培学院', '政治、经济与哲学', 0, time()],
            [1022503, '北京大学', '元培学院', '古生物学', 0, time()],
            [1022504, '北京大学', '元培学院', '外国语言与外国历史', 0, time()],
            [1022505, '北京大学', '元培学院', '全校教学资源范围内自由选择专业', 0, time()]
            ]);
        Yii::$app->db->createCommand('SET FOREIGN_KEY_CHECKS=1;')->execute();
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
     */
}

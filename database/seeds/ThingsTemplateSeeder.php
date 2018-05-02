<?php

use Illuminate\Database\Seeder;
use App\ThingsTemplate;


class ThingsTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
     $this->blankTemplate();
    }

    private function blankTemplate(){
      $query=
      [
        //"_id"
        "title"=>"_blank",
        "img"=>"#",
        "data"=>
        [//根据id远程读入，模板的信息
          "Attribut"=>[
            "title"=>"undefined",
            // "fatherId":this.data.id,
            "time"=>[
              "type"=>'once',
              "data"=>[
                "startCondition"=>'immediately',
                // "startTime":new Date(),
                "workTimeType"=>"inherit",
                "workTime"=>0,
              ],
            ],
            "workTimeCost"=>0,
            "planTimeCost"=>0,
            "importance"=>"2",
            "tags"=>[],
          ],
          "Mission"=>[
            [
              "type"=>"m_text",
              "content"=>"<p>点击此处修改任务描述</p>",
            ],
          ],
          "Permissions"=>[
            "owner"=>[],
            "role"=>[

              /*
              title:[
                default：
                  admin 拥有所有权限
                  reserve 后备-邀请
                ],
              permissions:[

              ]

              */

            ],
            "permissionsList"=>[],
          ],
          "Database"=>[],
          "Contact"=>[],
          "Collapse"=>[
            "Attribut",
            "Mission",
            "Permissions",
            "Contact",
          ],//记录折叠
          "Modules"=>[
            "Attribut",
            "Mission",
            "Permissions",
            "Contact",
          ],//记录启用的模块
        ]
      ];
        ThingsTemplate::create($query);
    }
}
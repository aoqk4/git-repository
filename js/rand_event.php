<script>
            items = [];
            shuffle_list = [];
            items_temp = ["fail","fail","1st_place","2nd_place","3rd_place"];
            state = 0;
            function change(no){
                box = document.getElementsByTagName("img");
                if(state == 0)
                {
                    shuffle();
                    state = 1;
                }
                str = "/img/"+items[no]+".png";
                box[no].src = str;
            }
            function shuffle()
            {
                shuffle_list = [Rand(0, 5),Rand(0, 5),Rand(0, 5),Rand(0, 5),Rand(0, 5)];
                check_no();
                for(i = 0; i <5; i++)
                {
                    items[shuffle_list[i]] = items_temp[i];
                }
            }
            function Rand(min, max) {
                min = Math.ceil(min);
                max = Math.floor(max);
                return Math.floor(Math.random() * (max - min)) + min;
            }
            function check_no() {
                get_no = [0,1,2,3,4];
                //동일한 요소를 가진 값 제거
                for(i = 0; i < 5; i++)
                {
                    for(k = 0; k< get_no.length;k++)
                    {
                        if(shuffle_list[i] == get_no[k])
                        {
                            get_no.splice(k,1);
                        }
                    }
                }

                for(i = 0; i < 5; i++)
                {
                    for(j = (i+1); j < 5; j++)
                    {
                        if(shuffle_list[i]==shuffle_list[j])
                        {
                            shuffle_list[i] = get_no[0];
                            for(k = 0; k< get_no.length;k++)
                            {
                                if(shuffle_list[i] == get_no[k])
                                {
                                    get_no.splice(k,1);
                                }
                            }
                        }
                    }
                }
            }
        </script>